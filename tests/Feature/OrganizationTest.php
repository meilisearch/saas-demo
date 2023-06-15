<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class OrganizationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itCanFindById(): void
    {
        Organization::factory()->create();
        $this->assertEquals(1, Organization::findById(1)->id);
    }

    /**
     * @test
     */
    public function itHasContactsThroughCompanies(): void
    {
        $org = Organization::factory()->create();
        $org->companies()->saveMany(
            Company::factory()->count(20)->make()
        );
        $org->companies->each(function ($company) {
            $company->contacts()->saveMany(
                Contact::factory()->count(5)->make()
            );
        });
        $org->refresh();

        $totalContacts = $org->companies->reduce(function ($carry, $company) {
            return $carry + $company->contacts->count();
        }, 0);

        $this->assertEquals($totalContacts, $org->contacts->count());
    }
}
