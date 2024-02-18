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
        Schema::create('m_wa', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('port', 10);
            $table->string('ip', 20);
            $table->string('phone')->nullable();
            $table->string('satus')->default('non active');
            $table->string('desctiption')->nullable();
            $table->string('created_by', 25);
            $table->string('updated_by', 25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_wa');
    }
};
