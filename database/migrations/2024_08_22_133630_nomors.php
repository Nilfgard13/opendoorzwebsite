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
        Schema::create('nomors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 125);
            $table->string('nomor', 50); // Menggunakan string dengan panjang 16
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('nomors');
    }
};
