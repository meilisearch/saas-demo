<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itCanFindByEmail(): void
    {
        $user = User::factory()->create();
        $this->assertEquals($user->id, User::findByEmail($user->email)->id);
    }

    /**
     * @test
     */
    public function itCanFindById(): void
    {
        $user = User::factory()->create();
        $this->assertEquals($user->id, User::findById($user->id)->id);
    }
}
