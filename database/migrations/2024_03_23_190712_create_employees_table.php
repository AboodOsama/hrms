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
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ename');
            $table->string('sex')->default('ذكر');
            $table->string('WorkingType');
            $table->string('Type');
            $table->string('Premissions');
            $table->string('Address');
            $table->string('Email')->unique();
            $table->date('hireDate');
            $table->string('Typeofwork');
            $table->string('gender');
            $table->string('position');
            $table->string('department');
            $table->unsignedBigInteger('company_id');
            $table->timestamps();

            // Add foreign key to 'employees' table
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        // Drop foreign key from 'employees' table
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });

        Schema::dropIfExists('employees');
    }
};
