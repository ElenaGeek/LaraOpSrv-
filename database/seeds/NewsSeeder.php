<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*
        \DB::table('news')
        ->insert([
            'title' => 'Новость 1',
            'info' => 'Детали Новости 1',
            'description' => '',
            'category_id' => '1',
            'source_id' => '1',
            'publish_date' => date('Y-m-d')
        ]);

        \DB::table('news')
        ->insert([
            'title' => 'Новость 2',
            'info' => 'Детали Новости 2',
            'description' => '',
            'category_id' => '2',
            'source_id' => '2',
            'publish_date' => date('Y-m-d')
        ]);
        */

        \DB::table('news')
        ->insert([
            'title' => $faker -> text(10),
            'info' => $faker -> text(20),
            'description' => '',
            'category_id' => '1',
            'source_id' => '1',
            //'source_id' => $faker -> url(),
            'publish_date' => $faker -> datetime(),
        ]);
    }
}
