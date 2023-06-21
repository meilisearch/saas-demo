<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Deal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->resetSearchIndexes();
        $this->seed();
        // TODO: waiting for Meilisearch tasks to be finished would be optimal to avoid random failures
    }

    /**
     * @test
     */
    public function itSynchronizesCompaniesData(): void
    {
        $rawSearchResults = Company::search('')->raw();
        $this->assertEquals(Company::count(), $rawSearchResults['nbHits']);
        // TODO: update this test to ensure data is synchronized after updates
    }

    /**
     * @test
     */
    public function itSynchronizesContactsData(): void
    {
        $rawSearchResults = Contact::search('')->raw();
        $this->assertEquals(Contact::count(), $rawSearchResults['nbHits']);
        // TODO: update this test to ensure data is synchronized after updates
    }

    /**
     * @test
     */
    public function itSynchronizesDealsData(): void
    {
        $rawSearchResults = Deal::search('')->raw();
        $this->assertEquals(Deal::count(), $rawSearchResults['nbHits']);
        // TODO: update this test to ensure data is synchronized after updates
    }
}
