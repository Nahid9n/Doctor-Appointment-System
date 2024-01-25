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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->nullable();
            $table->text('image')->nullable();
            $table->string('gender');
            $table->string('address')->nullable();
            $table->integer('mobile');
            $table->string('email')->unique()->nullable();
            $table->integer('department_id')->nullable();
            $table->string('blood')->nullable();
            $table->string('birth_day')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
