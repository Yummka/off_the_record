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
        Schema::create('evidence', function (Blueprint $table) {
            $table->id();

            $table->foreignId('investigation_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('location_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('person_id')
                ->nullable()
                ->constrained('people')
                ->nullOnDelete();

            $table->string('title');
            $table->string('type')->default('other');
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->string('file_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidence');
    }
};
