<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsOld extends Model
{

protected $fillable = [
	'title',
	'description',
	'publish_date',
	'created_at',
	'updated_at'
];

public function getNews()
	{
		// $news = \DB::table('news')->get();

		// $sql = "SELECT * FROM news WHERE id = :id";
        // $news = \DB::select($sql, [':id' => 1]);

        // $sql = "SELECT * FROM news";
        // $news = \DB::select($sql, []);

        $news = News::all();

		return $news;
		// return $this -> news;
	}

public function getByCategoryId(int $categoryId)
{
	$return =[];

	foreach ($this -> news as $item){
		if($item['category_id'] == $categoryId){

//			$return[] = $item;

			$return = static::query()
			->where ('category_id', $categoryId)
			->get();

			}

		}

	return $return;
}

public function category(){

	return $this->belongTo(Category::class);
}
}