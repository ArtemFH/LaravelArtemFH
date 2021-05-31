<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $awards = [
            [
                'id' => '1',
                'name' => 'Best 1 CPU'
            ],
            [
                'id' => '10',
                'name' => 'Best 100 CPU'
            ],
            [
                'id' => '2',
                'name' => 'Best 1 GPU'
            ],
            [
                'id' => '20',
                'name' => 'Best 100 GPU'
            ],
            [
                'id' => '3',
                'name' => 'Best 1 RAM'
            ],
            [
                'id' => '30',
                'name' => 'Best 100 RAM'
            ],
        ];
        DB::table('awards')->insert($awards);
    }
}
