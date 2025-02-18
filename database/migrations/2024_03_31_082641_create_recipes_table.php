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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->longText("description");
            $table->string("ingredients");
            $table->string("cooking_type")->nullable();
            $table->integer("duration")->nullable();
            $table->string("origin")->nullable();
            $table->longText("steps");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
