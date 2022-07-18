<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();
        for($i = 1; $i < 10; $i++){
                $data[] = [
                    'name' => Str::random(10),
                    'price' => rand(10000,99999),
                    'intro' => Str::random(10),
                    'content' => Str::random(10),
                    'image' => Str::random(5).'.jpg',
                    'status' => Str::random(10), 
                    'created_at' => new \DateTime(),  
                ];
        }
        DB::table('products')->insert($data);
    }
}
