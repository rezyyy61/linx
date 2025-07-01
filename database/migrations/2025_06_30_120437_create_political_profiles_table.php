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
        Schema::create('political_profiles', function (Blueprint $table) {
            $table->id();

            $table->string('group_name');
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();

            $table->string('entity_type')->nullable();
            $table->string('location')->nullable();
            $table->integer('founded_year')->nullable();

            $table->string('logo_path')->nullable();
            $table->string('manifesto_path')->nullable();

            $table->boolean('publish_now')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('political_profiles');
    }
};
