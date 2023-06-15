<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Deal;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DealTest extends TestCase
{
    use RefreshDatabase;

    public function makeDeal(): Deal
    {
        $org = Organization::factory()->create();
        $company = Company::factory()->for($org)->create();
        $contact = Contact::factory()->for($company)->create();
        return Deal::factory()
            ->for($org)
            ->for($company)
            ->for($contact)
            ->create();
    }

    /**
     * @test
     */
    public function itBelongsToAnOrganization(): void
    {
        $deal = $this->makeDeal();
        $this->assertInstanceOf(Organization::class, $deal->organization);
    }

    /**
     * @test
     */
    public function itBelongsToACompany(): void
    {
        $deal = $this->makeDeal();
        $this->assertInstanceOf(Company::class, $deal->company);
    }

    /**
     * @test
     */
    public function itBelongsToAContact(): void
    {
        $deal = $this->makeDeal();
        $this->assertInstanceOf(Contact::class, $deal->contact);
    }

    /**
     * @test
     */
    public function itHasAValue(): void
    {
        $deal = $this->makeDeal();
        $this->assertIsInt($deal->value);
    }
}
