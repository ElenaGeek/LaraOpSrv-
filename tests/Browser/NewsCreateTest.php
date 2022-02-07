<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\TestCase as BaseTestCase;

class NewsCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                    ->assertSee('Создать новость')
                    ->assertSee('Title')
                    ->type('title', '')
                    ->press('Поле обязательно для заполнения')
                    ->assertSee('Title')
                    ->type('title', '11')
                    ->press('Отправить')
                    ->assertSee('Поле должно быть не меньше 5 символов')
                    ;
        });
    }
}
