<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Iphone",
            'description' => "Mobile iphone",
            'amount' => 980,
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 2",
            'description' => "Mobile iphone",
            'amount' => 980,
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 3",
            'description' => "Mobile iphone",
            'amount' => 980,
        ]);
    }
}
