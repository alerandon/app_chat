<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    /** @test */

    public function register_user() {

        $user = factory(User::class)->create();

        $attributes = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
        ];

        $this->post('/register', $attributes)->assertRedirect('/');

        $this->assertDatabaseHas('users', $attributes);
        $this->assertCount(1, User::all());
        
    }

    /** @test */

    public function login_user() {

        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'heyiamthepasswordboy'),
        ]);

        $attributes = [
            'email' => $user->email,
            'password' => $password,
        ];
        
        $this->post('/login', $attributes)->assertRedirect('/');

        $this->assertAuthenticatedAs($user);

    }

    /** @test */

    public function email_is_required() {
        
        $user = factory(User::class)->raw(['email' => '']);

        $this->post('/login', $user)->assertSessionHasErrors('email');

    }

    /** @test */

    public function password_is_required() {
        
        $user = factory(User::class)->raw(['password' => '']);

        $this->post('/login', $user)->assertSessionHasErrors('password');
            
    }

}
