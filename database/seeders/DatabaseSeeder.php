<?php

use Database\Seeders\UserSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\DiseasesTableSeeder;
use Database\Seeders\SymtomsTableSeeder;
use Database\Seeders\RulesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DiseasesTableSeeder::class);
        $this->call(SymtomsTableSeeder::class);
        $this->call(RulesTableSeeder::class);
    }
}
