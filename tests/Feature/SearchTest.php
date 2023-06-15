<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
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
    public function itSynchronizesCompaniesData(): void
    {
        $this->artisan('scout:import', ['model' => \App\Models\Company::class]);
        // TODO: make this test pass (possibly fix the way the number of documents in the index are retrieved)
        $this->assertEquals(Company::count(), Company::search('')->get()->count());
    }
}
