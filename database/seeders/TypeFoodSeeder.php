<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_type')->insert([
            'name' => "Hoa quả",
        ]);
        DB::table('food_type')->insert([
            'name' => "Thực phẩm khô",
        ]);
        DB::table('food_type')->insert([
            'name' => "Rau hữu cơ",
        ]);
    }
}
