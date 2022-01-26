<?php

namespace App\Models;

class News
{

private $news =[
1=> ['id' => 1, 'title' => 'Новость 1', 'info' => ' Детали по новости 1', 'category_id' => '1'],
2=> ['id' => 2, 'title' => 'Новость 2', 'info' => ' Детали по новости 2', 'category_id' => '2'],
3=> ['id' => 3, 'title' => 'Новость 3', 'info' => ' Детали по новости 3', 'category_id' => '3']
];


public function getNews()
	{
		return $this -> news;
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