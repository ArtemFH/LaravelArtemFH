<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeratorSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'Voice',
                'password' => '$2y$12$sDMLTH4SPGUP88qTXV20zOVJbVVPvKy03jEs8FcJWe2QXYFIG2MA2',
                'email' => 'voice@mail.ru',
                'role_id' => '2',
                'like_nomination_id' => '20',
                'avatar' => 'user/ArtemFH.png'
            ]
        ];
        DB::table('users')->insert($users);
    }
}
