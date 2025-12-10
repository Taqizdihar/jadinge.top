<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('totems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location_area');
            $table->enum('orientation', ['portrait', 'landscape']);
            $table->enum('status', ['active', 'maintenance'])->default('active');
            $table->decimal('price_per_hour', 10, 2);
            $table->integer('loop_duration_seconds')->default(120);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('totems');
    }
};
