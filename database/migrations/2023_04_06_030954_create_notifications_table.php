<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('id_notification');
            $table->unsignedBigInteger('id_niveau');
             $table->text('message');
            $table->timestamp('date_notification')->nullable();
            $table->boolean('vu')->default(false);
            $table->timestamps();

            $table->foreign('id_niveau')
            ->references('id_niveau')
            ->on('niveau')
            ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
