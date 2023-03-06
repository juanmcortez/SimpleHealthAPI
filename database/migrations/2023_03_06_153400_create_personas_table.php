<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 64)->index()->nullable();
            $table->string('middle_name', 12)->nullable();
            $table->string('last_name', 64)->index()->nullable();

            $table->date('date_of_birth')->index();
            $table->string('gender', 12)->nullable()->default('male');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
