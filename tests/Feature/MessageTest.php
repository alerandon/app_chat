<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Message;

class MessageTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */

    public function send_message()
    {
        $this->withoutExceptionHandling();

        $this->post('/messages', ['message' => $this->faker->paragraph])->assertRedirect('/messages');
        $this->assertDatabaseHas('messages', ['message' => $this->faker->paragraph]);
        $this->assertCount(1, Message::all());
    }

    /** @test */

    public function fetch_message()
    {
        $this->withoutExceptionHandling();

        $message = factory('App\Message')->create();

        $this->get($message->path())
            ->assertSee($message->curso)
            ->assertSee($message->descripcion);   

    }

}
