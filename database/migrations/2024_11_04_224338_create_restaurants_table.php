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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // restaurant_id secara otomatis menggunakan id()
            $table->string('name');
            $table->string('address');
            $table->string('phone'); // kolom phone menggantikan phone_number
            $table->time('opening_hour'); // waktu buka
            $table->time('closing_hour'); // waktu tutup
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
