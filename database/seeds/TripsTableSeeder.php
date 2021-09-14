<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            
        // creo la nuova istanza
        $newTrip = new Trip();

        //popolo l'istanza
        $newTrip->destination = 'Milano';
        $newTrip->transport = 'Plane';
        $newTrip->description = $faker->text();
        $newTrip->price = rand(200, 1000);

        // salvo i dati
        $newTrip->save();
        }
    }
}