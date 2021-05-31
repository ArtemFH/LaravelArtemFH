<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'ArtemFH',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'artembereza1@mail.ru',
                'role_id' => '3',
                'like_nomination_id' => '30',
                'awards_id' => '[1,20]'
            ]
        ];
        DB::table('users')->insert($users);
    }
}
