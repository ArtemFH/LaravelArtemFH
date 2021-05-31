<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => '1',
                'name' => 'user'
            ],
            [
                'id' => '2',
                'name' => 'moderator'
            ],
            [
                'id' => '3',
                'name' => 'admin'
            ]
        ];
        DB::table('roles')->insert($roles);
    }
}
