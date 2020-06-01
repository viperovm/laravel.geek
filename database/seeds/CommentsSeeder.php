<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i=0;$i<500;$i++)
        {
            $data[] = [
                'comment' => $faker->sentence($nbWords = 16, $variableNbWords = true),
                'author_id' => $faker->numberBetween($min = 1, $max = 5),
                'news_id' => $faker->numberBetween($min = 1, $max = 100)
            ];
        }
        return $data;
    }
}
