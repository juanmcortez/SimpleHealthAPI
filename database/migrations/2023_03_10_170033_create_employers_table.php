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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();

            $table->string('company_name', 64)->nullable();
            $table->string('company_position', 64)->nullable();

            $table->unsignedBigInteger('company_address_ID')->nullable();
            $table->unsignedBigInteger('company_phone_ID')->nullable();
            $table->unsignedBigInteger('company_fax_ID')->nullable();

            $table->unsignedBigInteger('persona_ID')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
