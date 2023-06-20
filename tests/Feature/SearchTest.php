<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->artisan('scout:flush', ['model' => \App\Models\Company::class]);
        $this->artisan('scout:sync-index-settings');
        $this->artisan('scout:import', ['model' => \App\Models\Company::class]);
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
}
