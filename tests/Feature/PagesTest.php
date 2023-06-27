<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
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
        $this->assertGuest();
        $this->get('/')->assertRedirectToRoute('deals.index');
    }

    /**
     * @test
     */
    public function itLogsUser1ByDefault(): void
    {
        $this->seedUsers();
        $user = User::findById(1);

        $this->assertGuest();
        foreach (self::ROUTE_NAMES as $routeName) {
            $this->actingAs($user)
                ->get(route($routeName))
                ->assertSee($user->organization->name);
        }
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

    /**
     * @test
     */
    public function itProvidesTheOrganizationMeilisearchToken(): void
    {
        $this->seedUsers();
        $user = User::findById(1);

        foreach (self::ROUTE_NAMES as $routeName) {
            $this->actingAs($user)
                ->get(route($routeName))
                ->assertViewHas('meilisearchToken', $user->organization->meilisearch_token);
        }
    }
}
