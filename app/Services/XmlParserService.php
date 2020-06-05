<?php


namespace App\Services;

use Illuminate\Support\Facades\DB;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Str;

class XmlParserService
{

    public function newsTexts($url, $link)
    {
        $htmlParser = new HtmlParserService();
        return $htmlParser->getNewsText($url, $link);

    }


    public function newsImg($url, $name)
    {
        $newsImage = new ImageSaverService();
        return $newsImage->getNewsImg($url, $name);
    }

    public function getNewsCategoryId($name)
    {
        $namesArr = DB::table('categories')->select('name')->get()->toArray();
        foreach ($namesArr as $n) {
            $names[] = $n->name;
        }

        if (in_array($name, $names)) {
            $result = DB::table('categories')->select('id')->where('name', $name)->get();
            return $result[0]->id;
        } else {
            return DB::table('categories')->insertGetId(['name' => $name, 'slug' => $name]);
        }

    }

    public function getAuthorId($name)
    {
        $authorsArr = DB::table('authors')->select('name')->get()->toArray();
        foreach ($authorsArr as $a) {
            $authors[] = $a->name;
        }

        if (in_array($name, $authors)) {
            $result = DB::table('authors')->select('id')->where('name', $name)->get();
            return $result[0]->id;
        } else {
            return DB::table('authors')->insertGetId(['name' => $name]);
        }
    }

    public function saveNews($links)
    {
        foreach ($links as $key => $link) {
            dump($link);
            $xml = XmlParser::load($link);
            $data = $xml->parse([
                'link' => [
                    'uses' => 'channel.link'
                ],
                'news' => [
                    'uses' => 'channel.item[title,link,guid,description,pubDate,enclosure::url,author]'
                ],
                'category' => $key,
            ]);
        }

        $i = 0;
        foreach ($data['news'] as $item) {
            $title = $item['title'];
            $filename = self::newsImg($item['enclosure::url'], Str::slug($title));
            $id = DB::table('news')->insertGetId([
                'created_at' => date('Y-m-d H:m:s', strtotime($item['pubDate'])),
                'name' => Str::slug($title),
                'title' => $title,
                'excerpt' => $item['description'],
                'text' => self::newsTexts( $data['link'], $item['link']),
                'category_id' => self::getNewsCategoryId($data['category']),
                'img' => $item['enclosure::url'] == null ? null : '/public/images/' . $filename,
                'thumb_square' => $item['enclosure::url'] == null ? null : '/public/images/resized/thumb_square/' . $filename,
                'thumb_43' => $item['enclosure::url'] == null ? null : '/public/images/resized/thumb_43/' . $filename,
                'thumb_169' => $item['enclosure::url'] == null ? null : '/public/images/resized/thumb_169/' . $filename,
                'thumb_169_big' => $item['enclosure::url'] == null ? null : '/public/images/resized/thumb_169/' . $filename,
            ]);
            if ($item['author'] != null) {
                if (stristr($item['author'], ',') !== false) {
                    $authors = explode(',', $item['author']);
                    foreach ($authors as $author) {
                        DB::table('author_news')->insert([
                            'author_id' => self::getAuthorId(trim($author)),
                            'news_id' => $id,
                        ]);
                    }
                } else {
                    DB::table('author_news')->insert([
                        'author_id' => self::getAuthorId($item['author']),
                        'news_id' => $id,
                    ]);
                }
            }

            $i++;
            if ($i == 1) {
                break;
            }
        }
    }
}
