<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasums')->insert([
            ["name" => "Halte jalan A"],
            ["name" => "Trotoar jalan B"],
            ["name" => "Taman C"],
            ["name" => "Jembatan penyebrangan D"],
            ["name" => "Traffic light E"],
        ]);
    }
}
