<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Log;
use App\Imports\CompaniesImport;
use App\Models\Company;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class CompanySeeder extends Seeder
{

    // YC companies CSV columns
    // public $CSV_FILE = 'YCombinatorCompanies.csv';
    // public $NAME_COLUMN_INDEX = 0;
    // public $URL_COLUMN_INDEX = 1;

    // Fortune500 companies CSV columns
    public $CSV_FILE = 'Fortune500.csv';
    public $NAME_COLUMN_INDEX = 1;
    public $URL_COLUMN_INDEX = 4;


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataset = Excel::toArray(new CompaniesImport, $this->CSV_FILE);

        $companies = array_filter($dataset[0], function ($row, $index) {
            return ($index > 0);
        }, ARRAY_FILTER_USE_BOTH);

        Organization::all()->each(function (Organization $organization) use ($companies) {
            $companiesToCreate = fake()->randomElements($companies, 20);
            foreach ($companiesToCreate as $row) {
                // Get company attributes from CSV row
                $companyAttributes = [
                    'name' => $row[$this->NAME_COLUMN_INDEX],
                    'url' => $row[$this->URL_COLUMN_INDEX],
                ];
                // Create company belonging to organization
                Company::factory()->for($organization)->create($companyAttributes);
                // $organization->companies()->save(
                //     Company::factory()->make($companyAttributes)
                // );
            }
        });
    }
}
