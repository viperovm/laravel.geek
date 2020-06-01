<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{

    protected $fillable = [
        'name', 'title', 'excerpt', 'text', 'thumb_square', 'thumb_43', 'thumb_169', 'thumb_169_big', 'img', 'author_id', 'category_id', 'is_local', 'is_hidden', 'views', 'rating', 'comments'
    ];

    public static function getRequest()
    {
        return DB::table('news')->leftJoin('categories', 'news.category_id', '=', 'categories.id');
    }

    public static function getLocalNews($skip=0, $limit=0)
    {
        return self::getRequest()->where('is_local', true)->orderBy('news.id', 'desc')->skip($skip)->limit($limit)->get();
    }

    public static function getLocalNewsAll()
    {
        return self::getRequest()->where('is_local', true)->orderBy('news.id', 'desc')->get();
    }

    public static function getWorldNews($skip=0, $limit=0)
    {
        return self::getRequest()->where('is_local', false)->orderBy('news.id', 'desc')->skip($skip)->limit($limit)->get();
    }

    public static function getWorldNewsAll()
    {
        return self::getRequest()->where('is_local', false)->orderBy('news.id', 'desc')->get();
    }

    public static function getNewsByCategory($slug)
    {
        return self::getRequest()->where('slug', $slug)->orderBy('news.id', 'desc')->get();
    }

    public static function getNewsById($id)
    {
        foreach(DB::table('news')->where('id', $id)->get() as $arr)
        {
            return $arr;
        }
    }

    public static function getFirstPageNews()
    {
        return [
            'most_commented' => self::getRequest()->orderBy('comments', 'desc')->take(4)->get(),
            'slider' => self::getRequest()->orderBy('views', 'desc')->take(10)->get(),
            'local' => self::getLocalNews(0,5),
            'most_fresh' => self::getRequest()->orderBy('news.id', 'desc')->take(4)->get(),
            'world' => self::getWorldNews(0,5),
            'publisher_choice' => self::getRequest()->orderBy('img')->take(6)->get(),
            'rating' => self::getRequest()->orderBy('rating', 'desc')->take(6)->get(),
        ];
    }

    /*
     * CRUD
     */


}
