<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itLogsUser1ByDefault(): void
    {
        $this->seed();
        $user = User::findById(1);
        $this->assertGuest();
        $this->get('/')->assertSee($user->name);
        $this->assertAuthenticatedAs($user);
    }

    /**
     * @test
     */
    public function itDisplaysTheUserOrganization(): void
    {
        $this->seed();
        $user = User::findById(1);
        $this->actingAs($user)
            ->get('/')
            ->assertSee($user->organization->name);
    }
}
