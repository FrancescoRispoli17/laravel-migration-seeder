<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $table->id();
        // $table->timestamps();
        // $table->string('Azienda', 30);
        // $table->string('Stazione_partenza', 30);
        // $table->string('Stazione_arrivo', 30);
        // $table->dateTime('Orario_partenza', $precision = 0);
        // $table->dateTime('Orario_arrivo', $precision = 0);
        // $table->string('Codice_treno', 10);
        // $table->tinyInteger('N_carozze');
        // $table->boolean('In_orario');
        // $table->boolean('Cancellato');
        for($i=0;$i<20;$i++)
            {
                $train = new Train();
                $train->Azienda=$faker->company();
                $train->Stazione_partenza=$faker->city();
                $train->Stazione_arrivo=$faker->city();
                $train->Orario_partenza=$faker->dateTimeBetween('-1 week','+1 week');
                $train->Orario_arrivo=$faker->dateTimeBetween('-1 week','+1 week');
                $train->Codice_treno=$faker->bothify('??###');
                $train->N_carozze=$faker->numberBetween(2,30);
                $train->In_orario=$faker->boolean();
                $train->Cancellato=$faker->boolean();
                
                $train->save();
            }
    }
}
