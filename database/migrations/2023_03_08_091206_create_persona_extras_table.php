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
        Schema::create('persona_extras', function (Blueprint $table) {
            $table->id();

            $table->string('social_security_number', 64)->index()->nullable();

            $table->string('external_ID', 64)->index()->nullable();
            $table->string('patient_level_accession', 64)->index()->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_extras');
    }
};
