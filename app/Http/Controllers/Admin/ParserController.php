<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\XmlParserService;

class ParserController extends Controller
{
    public function index(XmlParserService $xmlParser)
    {
        $links = [

                //'Политика' => 'https://www.vedomosti.ru/rss/rubric/politics',
                'Бизнес' => 'https://www.vedomosti.ru/rss/rubric/business',
               // 'Технологии' => 'https://www.vedomosti.ru/rss/rubric/technology',
                'Авто' => 'https://www.vedomosti.ru/rss/rubric/auto',
                'Экономика' => 'https://www.vedomosti.ru/rss/rubric/economics',
                'Финансы' => 'https://www.vedomosti.ru/rss/rubric/finance',
                'Мнения' => 'https://www.vedomosti.ru/rss/rubric/opinion',
                'Недвижимость' => 'https://www.vedomosti.ru/rss/rubric/realty',
                'Менеджмент' => 'https://www.vedomosti.ru/rss/rubric/management',
                'Досуг' => 'https://www.vedomosti.ru/rss/rubric/lifestyle/leisure',
                'Политика' => 'https://www.gazeta.ru/export/rss/politics_news.xml',
               // 'Бизнес' => 'https://www.gazeta.ru/export/rss/busnews.xml',
                'Общество' => 'https://www.gazeta.ru/export/rss/social_more.xml',
                'Стиль' => 'https://www.gazeta.ru/export/rss/lifestyle_news.xml',
                'Технологии' => 'https://www.gazeta.ru/export/rss/tech_news.xml',
                'Армия' => 'https://www.gazeta.ru/export/rss/army_news.xml',
                'Культура' => 'https://www.gazeta.ru/export/rss/culture_more.xml',
                'Наука' => 'https://www.gazeta.ru/export/rss/science_more.xml',
                'Спорт' => 'https://www.gazeta.ru/export/rss/sportnews.xml',
              //  'Авто' => 'https://www.gazeta.ru/export/rss/autonews.xml',


        ];
        //foreach ($rssLinks as $links) {
            $xmlParser->saveNews($links);
       // }
    }

}
