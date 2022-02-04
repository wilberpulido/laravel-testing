<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; //aca se ejecuta la migracion
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUser()
    {
        //Proceso
        $userTest = User::factory()->create([
            'email' => 'w@gmail.com',
        ]);

        $this->assertDatabaseHas('users',[
            'email' => 'w@gmail.com'
        ]);

        $userTest->delete();

        $this->assertDatabaseMissing('users',[
            'email' => 'w@gmail.com'
        ]);
    }
}
