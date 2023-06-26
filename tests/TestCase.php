<?php

namespace Tests;

use Closure;
use Database\Seeders\OrganizationSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function seedUsers(): void
    {
        $this->seed(OrganizationSeeder::class);
        $this->seed(UserSeeder::class);
    }

    public function resetSearchIndexes(): void
    {
        $this->artisan('scout:flush', ['model' => \App\Models\Company::class]);
        $this->artisan('scout:flush', ['model' => \App\Models\Deal::class]);
        $this->artisan('scout:flush', ['model' => \App\Models\Company::class]);
        $this->artisan('scout:sync-index-settings');
    }
}
