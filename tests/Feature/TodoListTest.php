<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;
    /** @test*/
    public function fetch_todo_list()
    {

//        TodoList::create(['name'=>'my list' ]);
         TodoList::factory()->create(['name'=>'my list']);

    $response = $this->getJson('api/todo-list');

    $this->assertEquals(1,count($response->json()));
    $this->assertEquals('my list', $response->json()[0]['name']);

    $response->assertStatus(200);

    }
}
