<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 30);
            $table->string('Stazione_partenza', 30);
            $table->string('Stazione_arrivo', 30);
            $table->dateTime('Orario_partenza', $precision = 0);
            $table->dateTime('Orario_arrivo', $precision = 0);
            $table->string('Codice_treno', 10);
            $table->tinyInteger('N_carozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
