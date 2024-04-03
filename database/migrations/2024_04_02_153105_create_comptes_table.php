<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('no_bon');
            $table->string('origine_destination');
            $table->string('entrees');
            $table->string('sortie_def');
            $table->integer('prix_uni');
            $table->string('existant');
            $table->integer('montant_existant');
            $table->string('sorties_provisoires');
            $table->date('date_sorties_provisoires');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
};
