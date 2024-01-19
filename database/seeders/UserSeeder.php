<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "name" => "new",
                "password" => md5("123456"),
                "email" => "new@gmail.com",
                "address" => "tsu",
                "telephone" => "0999999999",
            ],
            [
                "name" => "pound",
                "password" => md5("123456"),
                "email" => "pound@gmail.com",
                "address" => "tsu",
                "telephone" => "0998444712",
            ],
            [
                "name" => "kk",
                "password" => md5("123456"),
                "email" => "kk@gmail.com",
                "address" => "tsu",
                "telephone" => "0875157985",
            ],
        ]);
    }
}
