<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i=0;$i<50;$i++)
        {
            $data[] = [
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'excerpt' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'text' => $faker->paragraphs($nb = 5, $asText = true),
                'thumb_square' => $faker->imageUrl($width = 300, $height = 300),
                'thumb_43' => $faker->imageUrl($width = 640, $height = 480),
                'thumb_169' => $faker->imageUrl($width = 255, $height = 144),
                'thumb_169_big' => $faker->imageUrl($width = 730, $height = 346),
                'img' => $faker->imageUrl($width = 1600, $height = 758),
                'author_id' => $faker->numberBetween($min = 1, $max = 5),
                'category_id' => $faker->numberBetween($min = 4, $max = 12),
                'is_local' => (boolean)rand(0,1),
                'is_hidden' => (boolean)rand(0,1),
                'views' => $faker->numberBetween($min = 0, $max = 100),
                'rating' => $faker->numberBetween($min = 1, $max = 5),
                'comments' => $faker->numberBetween($min = 1, $max = 50)
            ];
        }
        return $data;
    }
}
