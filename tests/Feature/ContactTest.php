<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itBelongsToACompany(): void
    {
        $org = Organization::factory()->create();
        $company = Company::factory()->for($org)->create();
        $contact = Contact::factory()->for($company)->create();
        $this->assertInstanceOf(Company::class, $contact->company);
    }
}
