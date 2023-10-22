<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColeurProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleur_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')
                ->nullable()
                ->references('id')
                ->on('produit');

            $table->unsignedBigInteger('couleur_id');
            $table->foreign('couleur_id')
                ->nullable()
                ->references('id')
                ->on('couleurs');
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
        Schema::dropIfExists('coleur_produit');
    }
}
