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
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id');
            $table->string('salary');
            $table->string('atttendance');
            $table->string('leave');
            $table->timestamps();

            $table->foreign('emp_id')->references('id')->on('emp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary');
    }
};
