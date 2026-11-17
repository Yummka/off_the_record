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
        Schema::create('interrogations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('investigation_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('person_id')
                ->constrained('people')
                ->cascadeOnDelete();

            $table->dateTime('interrogated_at')->nullable();
            $table->string('title');
            $table->longText('content');
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interrogations');
    }
};
