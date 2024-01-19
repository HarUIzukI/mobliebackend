<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'product_name' => 'iPone 15 ',
                'product_type' => 1,
                'price' => 59000,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Galaxy S20',
                'product_type' => 1,
                'price' => 25.900,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'LG Smart TV',
                'product_type' => 2,
                'price' => 30900,
                'created_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Samsung Smart TV',
                'product_type' => 2,
                'price' => 40900,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
