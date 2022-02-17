<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class NewsParser
{
    public function run(string $source)
    {
        $xml = XmlParser::load($source);
        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'chanel_description' => ['uses' => 'channel.description'],
            'items' => ['uses' => 'channel.item[title,description,category]'],
        ]);

        dump($data["items"][1]);

        foreach($data["items"] as $item){

            $news = \DB::table('news')->insert([
                'title' => $item["title"],
                'info' => $item["title"],
                'description' => $item["description"],
                'publish_date' => date('Y-m-d')
            ]);

        }

        return $data;
    }
}