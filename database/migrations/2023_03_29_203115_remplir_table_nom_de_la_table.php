<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'mamadou diouf',
                'email' => 'mamadoudiouf@supdeco.edu.sn',
                'password' => 'admin1234',
                'is_admin' => '1',

            ],
            [
                'name' => 'kouna fall',
                'email' => 'kounafall@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ],
            [
                'name' => 'fred lopy',
                'email' => 'fredlopy@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ],
            [
                'name' => 'dudu ndiaye',
                'email' => 'dudundiaye@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ],
            [
                'name' => 'anta sow',
                'email' => 'antasow@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ],
            [
                'name' => 'marie yamyago',
                'email' => 'marieyamyago@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ],
            [
                'name' => 'ana maka',
                'email' => 'anamaka@supdeco.edu.sn',
                'password' => 'supdeco1234',
                'is_admin' => '0',

            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
