<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\resources\views\news;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/news/2');

        $response->assertStatus(200)
//      ->assertSeeText('Новость 4')
        ->assertSeeText('Новость 2');
    }
}
