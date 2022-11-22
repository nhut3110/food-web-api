<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TypeFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('food_type')->insert([
            'name' => "Hoa quả",
            'created_at'=>$faker->iso8601($max = 'now'),
            'updated_at'=>$faker->iso8601($max = 'now')
        ]);
        DB::table('food_type')->insert([
            'name' => "Thực phẩm khô",
            'created_at'=>$faker->iso8601($max = 'now'),
            'updated_at'=>$faker->iso8601($max = 'now')
        ]);
        DB::table('food_type')->insert([
            'name' => "Rau hữu cơ",
            'created_at'=>$faker->iso8601($max = 'now'),
            'updated_at'=>$faker->iso8601($max = 'now')
        ]);
    }
}
