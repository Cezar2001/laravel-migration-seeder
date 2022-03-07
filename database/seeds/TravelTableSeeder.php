<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i < 10; $i++)
        {
            $travel = new Travel();
            
            $travel->name = $faker->firstName();
            $travel->surname = $faker->lastName();
            $travel->address = $faker->streetAddress();
            $travel->city = $faker->city();
            $travel->state = $faker->state();
            $travel->country = $faker->country();
            $travel->date_of_departure = "2021-12-17";
            $travel->date_of_arrival = "2021-12-18";
            
            $travel->save();
        }
    }
}
