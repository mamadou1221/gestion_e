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
        Schema::create('cours', function (Blueprint $table) {
            $table->id('id_cours');
            $table->string('intitule');
            $table->unsignedBigInteger('id_niveau');
            $table->unsignedBigInteger('id_enseignant');
            $table->timestamps();

            $table->foreign('id_niveau')
                  ->references('id_niveau')
                  ->on('niveau')
                  ->onDelete('cascade');

            $table->foreign('id_enseignant')
                  ->references('id_enseignant')
                  ->on('enseignants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
