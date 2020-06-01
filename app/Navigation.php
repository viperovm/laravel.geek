<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Navigation extends Model
{
    protected $fillable = [
        'name', 'url'
    ];

    public static function getNav($isAdmin=0)
    {
        return DB::table('navigations')->where('admin', $isAdmin)->get();
    }

    public static function getNameByUrl($url)
    {
        return DB::table('navigations')->where('url', $url)->value('name');
    }

}
