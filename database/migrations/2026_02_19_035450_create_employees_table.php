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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('nik_emp');
            $table->string('name');
            $table->string('company');
            $table->string('startcont')->nullabel();
            $table->string('join_date')->nullabel();
            $table->string('division');
            $table->string('location');
            $table->string('position');
            $table->string('no_hp');
            $table->string('status');
            $table->string('tgl_resign')->nullabel();
            $table->string('pic_hr');
            $table->string('email');
            $table->string('user_pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
