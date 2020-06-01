<?php

namespace App\Http\Controllers\News;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function showLocal()
    {

        $content = array_merge(self::getContent('local'),  ['news' => News::getLocalNewsAll()], ['count' => count(News::getLocalNewsAll())]);
// dd($content);
        return view('news.category')->with('content', $content);
    }

    public function showWorld()
    {

        $content = array_merge(self::getContent('world'),  ['news' => News::getWorldNewsAll()], ['count' => count(News::getWorldNewsAll())]);
//dd($content);
        return view('news.category')->with('content', $content);
    }

    public function showCategory($slug)
    {

        $content = array_merge(self::getContent($slug),  ['news' => News::getNewsByCategory($slug)], ['count' => count(News::getNewsByCategory($slug))]);
//dd($content);
            if ($content['count'] != 0)
            {
                return view('news.category')->with('content', $content);
            } else
            {
                return view('news.category_empty')->with('content', $content);
            }

    }

    public function showOne($slug, $id)
    {
        $content = array_merge(self::getContent($slug),  ['news' => News::getNewsById($id)]);

        //dd($content);

        return view('news.one')->with('content', $content);
    }
}
