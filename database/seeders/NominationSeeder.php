<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nominations = [
            [
                'id' => '10',
                'name' => 'CPU'
            ],
            [
                'id' => '20',
                'name' => 'GPU'
            ],
            [
                'id' => '30',
                'name' => 'RAM'
            ]
        ];
        DB::table('nominations')->insert($nominations);
    }
}
