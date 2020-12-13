<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\BiaSeeder;
use Database\Seeders\CompanybiadepartmentSeeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(CompanybiadepartmentSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BiaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
