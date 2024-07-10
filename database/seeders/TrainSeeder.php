<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
        $train = new Train();
        $train->Azienda='Freccia Rossa';
        $train->Stazione_partenza='Roma Termini';
        $train->Stazione_arrivo='Livorno Centrale';
        $train->Orario_partenza='2024-08-12 12:40:00';
        $train->Orario_arrivo='2024-08-12 16:20:00';
        $train->Codice_treno='KE454MRET0';
        $train->N_carozze=5;
        $train->In_orario=1;
        $train->Cancellato=0;
        $train->save();
    }
}
