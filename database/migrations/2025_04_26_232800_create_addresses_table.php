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
        Schema::create('addresses', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('street');
            $table->integer('number');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->foreignUuid('person_id')->constrained(
                table: 'persons',
                indexName: 'addresses_person_id_foreign'
            )->cascadeOnDelete()->nullable();
            $table->foreignUuid('branch_id')->constrained()->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
