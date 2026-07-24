<?php

use App\Models\Vet;
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
        Schema::create('business_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Vet::class)->constrained();
            $table->string('type');
            $table->unsignedInteger('day_of_week');
            $table->time('open_time');
            $table->time('close_time');
            $table->timestamps();

            $table->unique([
                'vet_id',
                'type',
                'day_of_week',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_hours');
    }
};
