<?php

namespace App\Http\Controllers;

use App\Category;
use App\Navigation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected static function getDate()
    {
        $days = [
            'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
            'Четверг', 'Пятница', 'Суббота'
        ];
        $monthes = [
            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        ];

        return $days[(date('w'))] . ', ' . date('d ') . $monthes[(date('n'))] . date(' Y ') . 'года';
    }

    protected static function getContent($slug='home')
    {
        return [
            'categories_top' => Category::showCategoryList(9),
            'categories_all' => Category::showCategoryListAll(),
            'date' => self::getDate(),
            'nav' => Navigation::getNav(0),
            'slug' => $slug,
            'category_name' => Category::getCategoryName($slug)
        ];
    }

    protected static function getSiteContent($url)
    {
        return array_merge(self::getContent(), ['name' => Navigation::getNameByUrl($url)]);
    }

}
