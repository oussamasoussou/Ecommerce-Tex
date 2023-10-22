<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTailleProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taille_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')
                ->nullable()
                ->references('id')
                ->on('produit');

            $table->unsignedBigInteger('taille_id');
            $table->foreign('taille_id')
                ->nullable()
                ->references('id')
                ->on('tailles');
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
        Schema::dropIfExists('taille_produit');
    }
}
