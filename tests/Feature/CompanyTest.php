<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itBelongsToAnOrganization(): void
    {
        $company = Company::factory()->for(Organization::factory()->create())->create();
        $this->assertInstanceOf(\App\Models\Organization::class, $company->organization);
    }

    /**
     * @test
     */
    public function itHasContacts(): void
    {
        $company = Company::factory()->for(Organization::factory()->create())->hasContacts(3)->create();
        $this->assertCount(3, $company->contacts);
    }

    /**
     * @test
     */
    public function itHasAnEmailDomainAttribute(): void
    {
        $company = Company::factory()->for(Organization::factory()->create())->create([
            'url' => 'www.meilisearch.com',
        ]);
        $this->assertEquals('meilisearch.com', $company->getEmailDomain());
    }
}
