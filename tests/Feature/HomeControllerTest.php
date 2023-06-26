<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    const ROUTE_NAMES = [
        'deals.index',
        'contacts.index',
        'companies.index',
    ];

    /**
     * @test
     */
    public function itRedirectsToDealsByDefault(): void
    {
        $this->get('/')->assertRedirect(route('deals.index'));
    }

    /**
     * @test
     */
    public function itLogsUser1ByDefault(): void
    {
        $this->seedUsers();
        $this->assertGuest();
        $user = User::findById(1);
        $this->get('/');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * @test
     */
    public function itDisplaysTheUserOrganization(): void
    {
        $this->seedUsers();
        $user = User::findById(1);
        
        foreach (self::ROUTE_NAMES as $routeName) {
            $this->actingAs($user)
                ->get(route($routeName))
                ->assertSee($user->organization->name);
        }
    }
}
