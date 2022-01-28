<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index()
    {
        // dump('Hi');

        /*
        \DB::statement("
            CREATE TABLE test(
                id int PRIMARY KEY AUTO_INCREMENT,
                content varchar(50))");
       \DB::statement("DROP TABLE IF EXISTS test");
        */

        \DB::statement("DROP TABLE IF EXISTS news");
        \DB::statement(
            "CREATE TABLE news(
                id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(50),
                info VARCHAR(100),
                description VARCHAR(250),
                category_id BIGINT UNSIGNED,
                source_id BIGINT UNSIGNED,
                status_id BIGINT UNSIGNED)
                ");

$sql = "INSERT INTO `news` (id, title, info) VALUES (:id, :title, :info)";
$result = \DB::insert($sql, [':id' => 1, ':title' => 'Новость 1', ':info' => 'Детали новости 1']);

$sql = "INSERT INTO `news` (id, title, info) VALUES (:id, :title, :info)";
$result = \DB::insert($sql, [':id' => 2, ':title' => 'Новость 1', ':info' => 'Детали новости 2']);

        $sql = "SELECT * FROM news WHERE id = :id";
        $result = \DB::select($sql, [':id' => 2]);

        dump($result);

        \DB::statement("DROP TABLE IF EXISTS news");
        echo "complete";

    }
}
