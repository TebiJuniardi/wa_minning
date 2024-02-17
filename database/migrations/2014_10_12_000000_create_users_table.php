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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',25)->unique(); // baru
            $table->string('password');
            $table->string('fullname',100);
            $table->string('position',50);
            $table->string('phone',15);
            $table->text('address');
            $table->date('date');
            $table->string('created_by',25);
            $table->string('updated_by',25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
