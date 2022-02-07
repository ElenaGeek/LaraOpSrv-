<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{

protected $table = 'news';

protected $fillable = [
	'title',
	'info',
	'description',
	'publish_date',
	'category_id'
];

public static function getByCategoryId(int $categoryId)
{
			$return = static::query()
			->where ('category_id', $categoryId)
			->get();
}

public function category(){

	return $this->belongsTo(Category::class);
}

public static function rules(){

	return[
	'title' => 'required|min:5|max:50|unique:news',
        'description' =>'max:1000| required',
        'category_id' => 'required|integer|exists:categories,id',
        'active' => 'boolean',
        'publish_date' => 'date'
	];
}

public static function News($id){

	// dump($id);
	$news = News::findOrNew($id);
	return $news;

}


// ---------------------------------------------------------------------------------

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


public function getCategoryId(int $categoryId)
{
	$return =[];

	foreach ($this -> news as $item){
		if($item['category_id'] == $categoryId){
//			$return[] = $item;
		}
	}

	return $return;
}

}