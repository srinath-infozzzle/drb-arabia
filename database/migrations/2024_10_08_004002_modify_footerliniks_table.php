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
        Schema::table('footerliniks', function (Blueprint $table) {
            //
			 $table->string('footerlinkkey',200)->nullable();
             $table->string('footertextkey',200)->nullable();
             $table->integer('footercolumns_id')->nullable();             
			 $table->integer('status')->default('0');
			 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footerliniks', function (Blueprint $table) {
           $table->dropColumn('footerlinkkey');
           $table->dropColumn('footertextkey');
           

		    $table->dropColumn('status');
		   
        });
    }
};
