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
        Schema::create('political_profile_ideologies', function (Blueprint $table) {
            $table->id();

            $table->foreignId('political_profile_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('ideology');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('political_profile_ideologies');
    }
};
