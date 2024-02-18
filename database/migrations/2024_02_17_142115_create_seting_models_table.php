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
        Schema::create('seting', function (Blueprint $table) {
            $table->id();
            $table->integer('start_delay_minning');
            $table->integer('finish_delay_minning');
            $table->integer('grouping');
            $table->integer('start_delay_blash');
            $table->integer('finish_delay_blash');
            $table->integer('max_group_blash');
            $table->integer('start_delay_group_blash');
            $table->integer('finish_delay_group_blash');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seting');
    }
};
