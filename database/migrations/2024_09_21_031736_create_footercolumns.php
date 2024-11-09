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
        Schema::create('footercolumns', function (Blueprint $table) {
            $table->id();
            
            $table->string('columnkey',50)->default('name');
			$table->string('column_name_english',100);
			$table->string('column_name_arabic',100);
            $table->integer('columnorder')->nullable();
            $table->integer('linkscount')->nullable();
            
			$table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footercolumns');
    }
};
