<?php

namespace Tests\Feature;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function makeUser(): User
    {
        return User::factory()
            ->for(Organization::factory()->create())
            ->create();
    }

    /**
     * @test
     */
    public function itCanFindByEmail(): void
    {
        $user = $this->makeUser();
        $this->assertEquals($user->id, User::findByEmail($user->email)->id);
    }

    /**
     * @test
     */
    public function itCanFindById(): void
    {
        $user = $this->makeUser();
        $this->assertEquals($user->id, User::findById($user->id)->id);
    }
}
