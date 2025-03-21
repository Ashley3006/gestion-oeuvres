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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255); // Correction ici
            $table->text('artiste');
            $table->string('photo', 255); // Correction ici
            $table->date('annee_de_fabrication');
            $table->date('date_acquisition');
            $table->longText('description');
            $table->double('prix');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categorie')->onDelete('cascade');
            $table->timestamps();
        });

        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
