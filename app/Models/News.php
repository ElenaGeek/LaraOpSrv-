<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News
{
/*
private $news =[
1=> ['id' => 1, 'title' => 'Новость 1', 'info' => ' Детали по новости 1', 'category_id' => '1'],
2=> ['id' => 2, 'title' => 'Новость 2', 'info' => ' Детали по новости 2', 'category_id' => '2'],
3=> ['id' => 3, 'title' => 'Новость 3', 'info' => ' Детали по новости 3', 'category_id' => '3']
];
*/

private $news;

public function getNews()
	{
		// $news = DB::table('news')->get();
		// $sql = "SELECT * FROM news WHERE id = :id";
        // $news = \DB::select($sql, [':id' => 1]);

        $sql = "SELECT * FROM news";
        $news = \DB::select($sql, []);

		// dd($news);
		return $news;
		// return $this -> news;
	}

public function getByCategoryId(int $categoryId)
{
	$return =[];

	foreach ($this -> news as $item){
		if($item['category_id'] == $categoryId){
			$return[] = $item;
			}
		}
	return $return;
}
}