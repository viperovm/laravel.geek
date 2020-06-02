<?php

use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');

        $data = [];
        for($i=0;$i<5;$i++)
        {
            $data[] = [
                'name' => $faker->name
            ];
        }
        return $data;
    }
}
