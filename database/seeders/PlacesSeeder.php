<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i<=5;$i++){
            DB::table('places')->insert([
                [
                    'name' => Str::random(20),
                    'description' => Str::random(40),
                    'city' => Str::random(20),
                    'province' => Str::random(20),
                    'postal_code' => Str::random(5),
                    'address' => Str::random(40),
                    'latitude' => mt_rand(-90000000, 90000000)/1000000,
                    'longitude' => mt_rand(-90000000, 90000000)/1000000,
                    'type_id' => mt_rand(1, 3)
                ],
            ]);
        }
    }
}
