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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semester_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('professor_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('capacity');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
