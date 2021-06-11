<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call([
            RoleSeeder::class,
            NominationSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
//            UserFakerSeeder::class,
            ModeratorSeeder::class,
            HardwareSeeder::class,
            BenchmarkSeeder::class
        ]);
    }
}
