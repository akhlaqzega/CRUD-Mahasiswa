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
        Schema::table('siswa', function (Blueprint $table) {
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn(['tanggal_lahir', 'agama']);
        });
    
    }
};
