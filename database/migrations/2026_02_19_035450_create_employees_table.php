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
            $table->string('emp_id')->unique();
            $table->string('nik_emp')->unique();
            $table->string('name');
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('education')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('ktp_number')->nullable();
            $table->text('address')->nullable();
            $table->string('residence')->nullable();

            $table->string('company')->nullable();
            $table->string('branch')->nullable();
            $table->string('location')->nullable();
            $table->string('division')->nullable();
            $table->string('position')->nullable();
            
            $table->date('join_date')->nullable();
            $table->date('contract_start')->nullable();
            $table->date('contract_end')->nullable();
            $table->string('contract_type')->nullable();

            $table->string('attendance_type')->nullable();

            $table->enum('status', ['Active', 'Inactive'])->default('Active');

            $table->string('input_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('input_date')->nullable();
            $table->string('updated_date')->nullable();

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
