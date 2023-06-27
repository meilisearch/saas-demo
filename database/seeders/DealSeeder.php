<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Deal;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::all()->each(function (Organization $organization) {
            $organization->contacts->each(function (Contact $contact) use ($organization) {
                $organization->deals()->save(
                    Deal::factory()->make([
                        'company_id' => $contact->company->id,
                        'contact_id' => $contact->id,
                    ])
                );
            });
        });
    }
}
