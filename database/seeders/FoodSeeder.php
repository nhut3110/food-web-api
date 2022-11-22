<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('product')->insert([
            'name' => $faker->name,
            'image' => $faker->imageUrl($width = 640, $height = 480),
            'unit_price' => $faker->numberBetween($min = 1000, $max = 100000),
            'promotion_price' => $faker->numberBetween($min = 1000, $max = 100000),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'type_id' => $faker->numberBetween($min = 1, $max = 3),
            'created_at'=>$faker->iso8601($max = 'now'),
            'updated_at'=>$faker->iso8601($max = 'now')
           ]);
        }
    }
}
