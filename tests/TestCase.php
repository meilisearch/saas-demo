<?php

namespace Tests;

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
}
