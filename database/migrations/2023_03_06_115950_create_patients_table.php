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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('pid');

            $table->unsignedBigInteger('persona_ID')->nullable()->comment('ID of the model for the persona details');
            $table->unsignedBigInteger('persona_extra_ID')->nullable();

            $table->unsignedBigInteger('guarantor_ID')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
