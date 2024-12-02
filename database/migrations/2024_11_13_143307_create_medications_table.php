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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('formulary');
            $table->string('brand')->nullable()->default(null);
            $table->string('display')->nullable()->default(null);
            $table->string('type')->default('Pill');
            $table->string('dosage');
            $table->enum(
                'status',
                ['active', 'inactive', 'on hold', 'stopped', 'completed']
            )
                ->default('active');
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete();
            $table->string('rxid')->nullable()->default(null);
            $table->unsignedBigInteger('prescriber')->nullable()->default(null);
            $table->string('instructions');
            $table->text('notes')->nullable()->default(null);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
