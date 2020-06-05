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
            'culture' => $request->where('category_id', 5)->orderBy('created_at')->limit(4)->get(),
            'slider' => $request->where('category_id', 17)->orderBy('created_at')->limit(10)->get(),
            'politics' => $request->where('category_id', 2)->orderBy('created_at')->limit(5)->get(),
            'economics' => $request->where('category_id', 3)->orderBy('created_at')->limit(5)->get(),
            'most_fresh' => $request->orderBy('created_at', 'desc')->limit(4)->get(),
            'sports' => $request->where('category_id', 4)->orderBy('created_at')->limit(6)->get(),
            'realty' => $request->where('category_id', 13)->orderBy('created_at')->limit(6)->get(),
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
