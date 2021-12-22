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
        \App\Models\User::factory(10)->create();
        \App\Models\DigitalType::factory(10)->create();
        \App\Models\DigitalProduct::factory(10)->create();
        
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
