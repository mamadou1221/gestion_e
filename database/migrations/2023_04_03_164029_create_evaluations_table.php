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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('id_evaluation');
            $table->unsignedBigInteger('id_cours');
            $table->unsignedBigInteger('id_etudiant');
            $table->tinyInteger('note');
            $table->text('commentaire')->nullable();
            $table->timestamp('date_evaluation');
            $table->timestamps();

            $table->foreign('id_cours')
                  ->references('id_cours')
                  ->on('cours')
                  ->onDelete('cascade');

            $table->foreign('id_etudiant')
                  ->references('id_etudiant')
                  ->on('etudiants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
