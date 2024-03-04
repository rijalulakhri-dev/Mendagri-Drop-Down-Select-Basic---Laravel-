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
        Schema::create('user_identities', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('birth_place'); // Tempat Lahir
            $table->date('date_of_birth');
            $table->string('province_id'); // Relasi ke Provinsi
            $table->string('regency_id'); // Relasi ke Kabupaten
            $table->string('district_id'); // Relasi ke Kecamatan
            $table->string('village_id'); // Relasi ke Desa
            $table->string('address');
            $table->string('phone_number');
            $table->string('occupation'); // Pekerjaan
            $table->string('nik_number')->nullable(); // NIK
            $table->string('kk_number')->nullable(); //KK
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
        Schema::dropIfExists('user_identities');
    }
};
