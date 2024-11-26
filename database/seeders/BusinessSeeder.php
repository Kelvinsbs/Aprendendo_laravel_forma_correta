<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::factory(7)->create();
        DB::table('businesses')->insert([]);
    }
}
