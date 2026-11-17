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
        Schema::create('investigation_location', function (Blueprint $table) {
            $table->foreignId('investigation_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('location_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->text('notes')->nullable();
            $table->timestamp('discovered_at')->nullable();

            $table->primary(['investigation_id', 'location_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investigation_location');
    }
};
