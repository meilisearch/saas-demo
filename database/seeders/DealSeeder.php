<?php

namespace Database\Seeders;

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
            $organization->deals()->saveMany(
                Deal::factory()->count(20)->make([
                    'company_id' => $organization->companies->random()->id,
                    'contact_id' => $organization->contacts->random()->id,
                ])
            );
        });
    }
}
