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
        Schema::create('table_register', function (Blueprint $table) {
            $table->id();
            $table->string("name", 60);
            $table->string("email", 60);
            $table->integer("mobile"); // Remove auto_increment property
            $table->string("city", 60);
            $table->string("password", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_register');
    }
};
