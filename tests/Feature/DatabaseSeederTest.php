<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
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
            'organization_id' => Organization::findById(1)->id,
        ]);
        $this->assertDatabaseHas('users', [
            'email' => config('app.seeders.user2.email'),
            'avatar_url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80',
            'organization_id' => Organization::findById(2)->id,
        ]);
    }

    /**
     * @test
     */
    public function itCreates20CompaniesForEachOrganization(): void
    {
        Organization::all()->each(function ($org) {
            $this->assertCount(20, $org->companies);
        });
    }

    /**
     * @test
     */
    public function itCreatesCompaniesWithURL(): void
    {
        Company::all()->each(function ($company) {
            $this->assertNotNull($company->url);
        });
    }

    /**
     * @test
     */
    public function itCreates5ContactsForEachCompany(): void
    {
        Company::all()->each(function ($company) {
            $this->assertCount(5, $company->contacts);
        });
    }

    /**
     * @test
     */
    public function itCreatesContactsWithCompanyEmail(): void
    {
        Company::all()->each(function ($company) {
            $company->contacts->each(function ($contact) use ($company) {
                $this->assertStringContainsString($company->getEmailDomain(), $contact->email);
            });
        });
    }

    /**
     * @test
     */
    public function itCreates20DealsForEachOrganization(): void
    {
        Organization::all()->each(function ($org) {
            $this->assertCount(20, $org->deals);
        });
    }

    /**
     * @test
     */
    public function itCreatesDealsForCompaniesOwnedByTheOrganization(): void
    {
        Organization::with('deals.company')->get()->each(function ($org) {
            $org->deals->each(function ($deal) use ($org) {
                $this->assertEquals($org->id, $deal->company->organization->id);
            });
        });
    }
}
