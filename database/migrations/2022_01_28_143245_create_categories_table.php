<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','50')
            ->unique()
            ->nullable(false)
            ->comment('Название категории');
            $table->string('image', '50')
            ->nullable(true);
            $table->timestamps();
        });

        \DB::table('categories')
        ->insert([
            'name' => 'Политика',
            'image' => '1',
        ]);

        \DB::table('categories')
        ->insert([
            'name' => 'Экономика',
            'image' => '2',
        ]);

        \DB::table('categories')
        ->insert([
            'name' => 'Культура',
            'image' => '3',
        ]);

        \DB::table('categories')
        ->insert([
            'name' => 'Погода',
            'image' => '4',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
