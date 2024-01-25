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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('education')->nullable();
            $table->integer('age')->nullable();
            $table->string('blood_group')->nullable();
            $table->integer('department_id');
            $table->string('gender');
            $table->text('address')->nullable();
            $table->text('experience')->nullable();
            $table->text('instagram')->nullable();
            $table->text('facebook')->nullable();
            $table->text('linkedIn')->nullable();
            $table->text('twitter')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('bio_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
