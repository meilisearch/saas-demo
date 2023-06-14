<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::all()->each(function (Organization $organization) {
            $organization->companies()->saveMany(Company::factory()->count(200)->make());
        });
    }
}
