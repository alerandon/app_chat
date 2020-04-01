<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class UserTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    /** @test */

    public function add_user() {

        $user = [
            'name' => $this->faker->sentence,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];

        $this->post('/register', $user)->assertRedirect('/');
            
        $this->assertDatabaseHas('users', $user);
        $this->assertCount(1, User::all());
        
    }
}
