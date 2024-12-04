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

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('industry_id');
            $table->string('address')->nullable();
            $table->string('img')->default('company.png');
            $table->string('recipient')->default('مدير الموارد البشرية');
            $table->string('recipient_phone')->nullable();
            $table->timestamps();

            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        
        // Drop foreign key from 'companies' table
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign(['industry_id']);
        });
        
        Schema::dropIfExists('companies');
    }
};
