<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testSeededUser1CanLogin(): void
    {
        $this->seedUsers();
        $this->assertGuest();
        $this->post('/login', ['email' => config('app.seeders.user1.email')])
            ->assertStatus(302);
        $this->assertAuthenticatedAs(User::findByEmail(config('app.seeders.user1.email')));
    }

    public function testSeededUser2CanLogin(): void
    {
        $this->seedUsers();
        $this->assertGuest();
        $this->post('/login', ['email' => config('app.seeders.user2.email')])
            ->assertStatus(302);
        $this->assertAuthenticatedAs(User::findByEmail(config('app.seeders.user2.email')));
    }

    /**
     * @test
     */
    public function itRedirectsToPreviousRoute(): void
    {
        $this->seedUsers();
        $routeNames =  [
            'deals.index',
            'contacts.index',
            'companies.index',
        ];

        foreach ($routeNames as $routeName) {
            $this->get(route($routeName));
            $this->post('/login', ['email' => config('app.seeders.user1.email')])
                ->assertRedirectToRoute($routeName);
        }
    }
}
