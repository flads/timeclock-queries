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
        Schema::create('persons', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name');
            $table->string('cpf', length: 11)->unique();
            $table->string('rg', length: 9)->unique();
            $table->date('birthdate');
            $table->char('gender', 1);
            $table->char('phone', 11)->unique();
            $table->string('email')->unique();
            $table->foreignUuid('branch_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
