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
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('persona_ID')->references('id')->on('personas');
            $table->foreign('persona_extra_ID')->references('id')->on('personas_extras');
            $table->foreign('guarantor_ID')->references('id')->on('guarantors');
            $table->foreign('employer_ID')->references('id')->on('employers');
        });

        Schema::table('guarantors', function (Blueprint $table) {
            $table->foreign('persona_ID')->references('id')->on('personas');
        });

        Schema::table('employers', function (Blueprint $table) {
            $table->foreign('persona_ID')->references('id')->on('personas');
            $table->foreign('company_address_ID')->references('id')->on('addresses');
            $table->foreign('company_phone_ID')->references('id')->on('phones');
            $table->foreign('company_fax_ID')->references('id')->on('phones');
        });

        Schema::table('personas', function (Blueprint $table) {
            $table->foreign('address_ID')->references('id')->on('addresses');
            $table->foreign('phone_ID')->references('id')->on('phones');
            $table->foreign('cellphone_ID')->references('id')->on('phones');
            $table->foreign('social_ID')->references('id')->on('socials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
        Schema::dropIfExists('employers');
        Schema::dropIfExists('guarantors');
        Schema::dropIfExists('personas');
    }
};
