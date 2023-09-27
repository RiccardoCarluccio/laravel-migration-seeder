<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i<20; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->data = $faker->dateTimeInInterval("now", '2 weeks');
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numberBetween(0, 999999);
            $newTrain->numero_carrozze = $faker->numberBetween(0, 10);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
