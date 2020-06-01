<?php

namespace App\Http\Controllers;

use App\Category;
use App\Navigation;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $request = News::query()->leftJoin('categories', 'news.category_id', '=', 'categories.id');
        $news_set = [
            'most_commented' => $request->orderBy('comments', 'desc')->limit(4)->get(),
            'slider' => $request->orderBy('views', 'desc')->limit(10)->get(),
            'local' => $request->where('is_local', true)->orderBy('news.id', 'desc')->limit(5)->get(),
            'most_fresh' => $request->orderBy('news.id', 'desc')->limit(4)->get(),
            'publisher_choice' => $request->orderBy('img')->limit(6)->get(),
            'rating' => $request->orderBy('rating', 'desc')->limit(6)->get(),
            'world' => $request->where('is_local', true)->orderBy('news.id', 'desc')->limit(5)->get(),
        ];

        $content = array_merge(static::getContent(), $news_set);
 //dd($content);
        return view('home')->with('content', $content);
    }

    public function getSitePage($url)
    {
        // dd(static::getContent($url));
        return view($url)->with('content', static::getContent($url));
    }
}
