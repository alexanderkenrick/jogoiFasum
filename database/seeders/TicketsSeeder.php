<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket')->insert([
            ["report" => "kotor", "fasum_id" => 1, "place_id" =>1],
            ["report" => "rusak", "fasum_id" => 2, "place_id" =>2],
            ["report" => "kotor", "fasum_id" => 3, "place_id" =>1],
            ["report" => "rusak", "fasum_id" => 4, "place_id" =>4],
            ["report" => "mati", "fasum_id" => 5, "place_id" =>3],
//            [
//                'place_id' => 1,
//                'title' => Str::random(20),
//                'description' => Str::random(40),
//                'dinas_terkait' => Str::random(20),
//                'priority' => 'Low',
//                'status' => 'Open',
//            ],
//            [
//                'place_id' => 3,
//                'title' => Str::random(20),
//                'description' => Str::random(40),
//                'dinas_terkait' => Str::random(20),
//                'priority' => 'Medium',
//                'status' => 'Open',
//            ],
//            [
//                'place_id' => 2,
//                'title' => Str::random(20),
//                'description' => Str::random(40),
//                'dinas_terkait' => Str::random(20),
//                'priority' => 'High',
//                'status' => 'Close',
//            ],
//            [
//                'place_id' => 2,
//                'title' => Str::random(20),
//                'description' => Str::random(40),
//                'dinas_terkait' => Str::random(20),
//                'priority' => 'Low',
//                'status' => 'Open',
//            ],
        ]);
    }
}
