<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('lib')->nullable();
            $table->string('ref')->nullable();
            $table->string('status')->nullable();
            $table->text('small_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->string('prix')->nullable();
            $table->string('prix_promo')->nullable();
            $table->string('img')->nullable();
            $table->string('qte')->nullable();
            $table->foreignId('categorie_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId('sous_categorie_id')
                ->constrained('sous_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
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
        Schema::dropIfExists('produit');
    }
}
