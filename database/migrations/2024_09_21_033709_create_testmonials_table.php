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
        Schema::create('testmonials', function (Blueprint $table) {
            $table->id();
			 $table->string('name_key',100);
	$table->string('testmonial_key',100);
			$table->string('name_en',100);
			$table->string('name_ar',100);
			$table->string('testmonial_text_en',2000);
			$table->string('testmonial_text_ar',2000);
			$table->integer('status');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testmonials');
    }
};
