<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title','50')
            ->unique()
            ->nullable(false)
            ->comment('Заголовок новости');
            $table->string('info','100')
            ->nullable(false)
            ->comment('Краткое содержание');
            $table->text('description')
            ->comment('Полное описание');
            $table->dateTime('publish_date')
            ->index();
            $table->string('photo', '50')
            ->nullable(true);
            $table->bigInteger('category_id')
            ->nullable(false);
            $table->bigInteger('source_id')
            ->nullable(false);
            $table->boolean('status')
            ->default(0);
            $table->timestamps();
        });

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
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
