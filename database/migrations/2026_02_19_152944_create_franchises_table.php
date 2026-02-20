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
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('point_name'); // পয়েন্টের নাম
            $table->string('division');   // বিভাগ
            $table->string('district');   // জেলা
            $table->string('upazila');    // উপজেলা
            $table->string('contact_no'); // মোবাইল নম্বর
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franchises');
    }
};
