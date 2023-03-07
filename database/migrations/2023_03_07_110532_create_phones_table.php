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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();

            $table->string('country_code', 4)
                ->nullable()
                ->default('+1')
                ->comment('+1');

            $table->string('area_code', 5)
                ->nullable()
                ->default('000')
                ->comment('(000)');

            $table->string('telephone_prefix', 4)
                ->nullable()
                ->default('000')
                ->comment('000');

            $table->string('line_number', 4)
                ->nullable()
                ->default('0000')
                ->comment('0000');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
