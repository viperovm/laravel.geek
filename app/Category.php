<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];

    public static function showCategoryList($limit=0)
    {
        return DB::table('categories')->limit($limit)->get();
    }

    public static function showCategoryListAll()
    {
        return DB::table('categories')->get();
    }

    public static function getCategoryName($slug)
    {
        foreach(DB::table('categories')->select('name')->where('slug', $slug)->get() as $arr)
        {
            return $arr->name;
        }
    }

}
