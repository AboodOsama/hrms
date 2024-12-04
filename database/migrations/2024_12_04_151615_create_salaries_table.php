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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id');
            $table->date('end_date');
            $table->date('start_date');
            $table->string('Appearance');
            $table->string('transportation');
            $table->float('Gross _Salary');
            $table->float('Basic_Salary');
            $table->string('empInsurance');
            $table->string('compInsurance');
            $table->string('Taxes');
            $table->float('Net_Salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
