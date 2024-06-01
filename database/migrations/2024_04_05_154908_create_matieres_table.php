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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->date('date_operation');
            $table->integer('no_comptes_nomenclature');
            $table->string('nature_matieres');
            $table->integer('entrees_no_bon');
            $table->integer('entrees_nbre_unites');
            $table->string('entrees_nature_unite');
            $table->integer('sorties_no_bon');
            $table->integer('sorties_nbre_unites');
            $table->string('sorties_nature_unite');
            $table->integer('prix_uni');
            $table->integer('montant_entrees');
            $table->integer('montant_sorties');
            $table->string('sorties_provisoires');
            $table->string('observations');
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
        Schema::dropIfExists('matieres');
    }
};
