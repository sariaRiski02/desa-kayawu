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
        Schema::create('member_families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_family')->references('id')->on('families');
            $table->string('name');
            $table->string('gender');
            $table->string('address');
            $table->string('marital_status')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('education_level')->nullable();
            $table->string('occupation')->nullable();
            $table->string('family_position');
            $table->string('nik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_families');
    }
};
