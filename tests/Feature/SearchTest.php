<?php

namespace Tests\Feature;

use Sti3bas\ScoutArray\Facades\Search;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Deal;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->resetSearchIndexes();
        // TODO: waiting for Meilisearch tasks to be finished would be optimal to avoid random failures
    }

    /**
     * @test
     */
    public function itSynchronizesCompaniesData(): void
    {
        $company = Company::factory()->for(Organization::factory()->create())->create();
        Search::assertSynced($company);
    }

    /**
     * @test
     */
    public function itSynchronizesContactsData(): void
    {
        $org = Organization::factory()->create();
        $company = Company::factory()->for($org)->create();
        $contact = Contact::factory()->for($company)->create();
        Search::assertSynced($contact);
    }

    /**
     * @test
     */
    public function itSynchronizesDealsData(): void
    {

        $org = Organization::factory()->create();
        $company = Company::factory()->for($org)->create();
        $contact = Contact::factory()->for($company)->create();
        $deal = Deal::factory()
            ->for($org)
            ->for($company)
            ->for($contact)
            ->create();
        Search::assertSynced($deal);
    }
}
