<?php

namespace Database\Seeders;


use App\Models\Event;
use Illuminate\Database\Seeder;


class EventTableSeeder extends Seeder
{
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
       // Event::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Event::create([
                'title' => $faker->sentence,
                'date' => $faker->date(),
                'time' => $faker->time()
            ]);
        }
    }
}

