<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class userTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            ["role_id"=>'1',"name"=>"admin","telephone"=>"654567898","email"=>"michellefotso2@gmail.com","enabled"=>"0"],
            
        ]);
    }
}
