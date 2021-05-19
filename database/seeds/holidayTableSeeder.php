<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday; 

class holidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            $holiday = new Holiday();
            $holiday->location='Sardegna';
            $holiday->people= 2;
            $holiday->days_of_holidays= 7;
            $holiday->personal_vote_from_1_to_5= 5;
            $holiday->save();    
        for ($i=0; $i < 10; $i++) { 
            $holiday = new Holiday();
            $holiday->location = $faker->country();
            $holiday->people = $faker->numberBetween(2,2);
            $holiday->days_of_holidays = $faker->numberBetween(7,8);
            $holiday->personal_vote_from_1_to_5 = $faker->numberBetween(1,5);
            $holiday->save();
        }
    }
}
