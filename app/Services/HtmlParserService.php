<?php


namespace App\Services;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;


class HtmlParserService
{

    public function getNewsText($url, $link)
    {

        $client = new Client();
        $res = $client->request('GET', $link);
        $html = '' . $res->getBody();
        $utf8_body = mb_convert_encoding($html, 'UTF-8', 'windows-1251');

        $filter = '';
        if (Str::is('*gazeta*', $url)) {
            $filter = 'div.article-text-body > p';
        } elseif (Str::is('*vedomosti*', $url)) {
            $filter = '.article-boxes-list > div > div > p';
        }

        $crawler = new Crawler($html);
        $items = $crawler->filter($filter)->each(function (Crawler $node, $i) {
            $item = '';
            $text = $node->text();
            $item .= '<p>' . $text . '</p>';
           // dump($item);
            return $item;
        });

        $newsText = '';
        foreach($items as $item){
            if(Str::is('*НОВОСТИ ПО ТЕМЕ*', $item)){break;}
            $newsText .= $item;
        }
        return $newsText;
    }

}
