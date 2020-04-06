<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Message;

class MessageTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */

    public function send_message()
    {
        $this->withoutExceptionHandling();

        $message = factory(Message::class)->create();

        $attributes = [
            'user_id' => $message->user_id,
            'message' => $message->text,
        ];

        dd($attributes);

        $this->post('/messages', $attributes)
            ->assertRedirect('/messages')
            ->assertSuccessful();
            
        $this->assertDatabaseHas('messages', $attributes);
        $this->assertCount(1, Message::all());
    }

    /** @test */

    public function fetch_message()
    {
        $this->withoutExceptionHandling();

        $message = factory(Message::class)->create();

        $this->get('/message')->assertSee($message->text);   

    }

}
