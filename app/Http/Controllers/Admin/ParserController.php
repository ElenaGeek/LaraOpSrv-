<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Orchestra\Parser\Xml;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use App\Jobs\NewsParsingJob;

class ParserController extends Controller
{


public function index()
    {

 $sources = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/culture.rss',
            'https://news.yandex.ru/championsleague.rss',
            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/nhl.rss',
        ];


    foreach ($sources as $source) {
            NewsParsingJob::dispatch($source);

        }
    }


//*************************************************************************************
/*
    public function index()
    {

        $source = ['https://news.yandex.ru/index.rss'];
        $xml = XmlParser::load($source[0]);

        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'chanel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description]'],
        ]);
        //var_dump($data["items"][1]);

        foreach($data["items"] as $item){
            if(preg_match('/[а-я0-9]+/msi',$item["title"]))
            {
            //dump($item["title"]);
            $news = \DB::table('news')->insert([
                'title' => $item["title"],
                'info' => $item["title"],
                'description' => $item["description"],
                'publish_date' => date('Y-m-d')
            ]);

            }
        }

        //return $news;

    }
*/

}
