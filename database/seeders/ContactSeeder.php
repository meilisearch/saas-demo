<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::all()->each(function (Company $company) {
            $contacts = Contact::factory()->count(5)->make();
            $contacts->each(function (Contact $contact) use ($company) {
                $sanizedName = filter_var($contact->name, FILTER_SANITIZE_URL);
                $contact->email =  strtolower($sanizedName) . '@' . $company->getEmailDomain();
            });
            $company->contacts()->saveMany($contacts);
        });
    }
}
