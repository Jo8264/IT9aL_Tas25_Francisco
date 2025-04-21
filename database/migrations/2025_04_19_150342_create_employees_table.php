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
            $table->id('employee_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->nullable();
            $table->date('hire_date');
            $table->unsignedBigInteger('job_id');
            $table->decimal('salary', 10, 2);
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('manager_id')->nullable();
        
            $table->foreign('job_id')->references('job_id')->on('employee_jobs')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('manager_id')->references('employee_id')->on('employees')->onDelete('set null');
        
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
