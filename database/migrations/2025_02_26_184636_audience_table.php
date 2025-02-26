<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(('audience'), function (Blueprint $table) {
            $table->id();
            $table->integer('audience_number');
            $table->foreignId('film_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.S
     */
    public function down(): void
    {
        //
    }
};
