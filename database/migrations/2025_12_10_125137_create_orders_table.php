<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void{
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('total_price', 12, 2);
            $table->string('content_file')->nullable();
            $table->enum('content_type', ['image', 'video'])->nullable();
            $table->integer('content_duration');
            $table->enum('status', [
                'draft', 
                'waiting_review',
                'content_rejected',
                'approved',
                'scheduled',
                'completed',
                'cancelled'
            ])->default('draft');
            $table->text('rejection_note')->nullable();
            $table->timestamps();
        });
    }
};
