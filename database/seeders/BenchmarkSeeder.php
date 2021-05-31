<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenchmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $benchmarks = [
            [
                'image' => 'benchmarks/test.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '10',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '20',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ], [
                'image' => 'benchmarks/' . rand(1, 4) . '.jpg',
                'score' => rand(2000, 50000),
                'user_id' => rand(1, 5),
                'nomination_id' => '30',
                'created_at' => '2021-04-06 02:09:19',
                'approved' => '1'
            ],
        ];
        DB::table('benchmarks')->insert($benchmarks);
    }
}
