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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
    		$table->date('date');

    		$table->unsignedBigInteger('user_id');
    		$table->unsignedBigInteger('module_id');
    		$table->foreign('user_id')-> references('id')->on('users')-> onUpdate('cascade')-> onDelete('cascade');
    		$table->foreign('module_id')->references('id')->on('modules')-> onUpdate('cascade')-> onDelete('cascade');

            $table->timestamps();
      });


    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
