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
        Schema::create('time_clock_records', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->dateTime('register');
            $table->foreignUuid('person_id')->constrained(
                table: 'persons',
                indexName: 'addresses_person_id_foreign'
            )->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_clock_records');
    }
};
