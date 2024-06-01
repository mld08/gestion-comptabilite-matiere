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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('designation');
            $table->integer('quantite');
            $table->float('prix_unitaire');
            $table->float('prix_total');
            $table->string('fournisseur');
            $table->string('rc_fournisseur');
            $table->string('email');
            $table->string('telephone');
            $table->string('adresse');
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
        Schema::dropIfExists('materiels');
    }
};
