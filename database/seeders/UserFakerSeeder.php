<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserFakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(1000)->create();
    }
}
