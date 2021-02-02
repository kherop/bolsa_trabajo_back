<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(OfferSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(OfferAreasSeeder::class);
        $this->call(UserRolesSeeder::class);
    }
}
