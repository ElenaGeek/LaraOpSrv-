<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
            'category_id' => '1',
            'source_id' => '1',
            'publish_date' => date('Y-m-d')
        ]);
    }
}
