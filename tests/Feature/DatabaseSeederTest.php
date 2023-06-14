<?php

namespace Tests\Feature;

use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * @test
     */
    public function itCreatesTwoOrganizations(): void
    {
        $this->assertCount(2, Organization::all());
    }

    /**
     * @test
     */
    public function itCreatesTwoUsersFromConfiguration(): void
    {
        $this->assertDatabaseHas('users', [
            'email' => config('app.seeders.user1.email'),
            'avatar_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80',
            'organization_id' => 1,
        ]);
        $this->assertDatabaseHas('users', [
            'email' => config('app.seeders.user2.email'),
            'avatar_url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
            'organization_id' => 2,
        ]);
    }

    /**
     * @test
     */
    public function itCreates200CompaniesForEachOrganization(): void
    {
        Organization::all()->each(function ($org) {
            $this->assertCount(200, $org->companies);
        });
    }
}
