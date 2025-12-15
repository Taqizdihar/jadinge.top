<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['deposit', 'payment']);
            $table->decimal('amount', 12, 2);
            $table->string('description');
            $table->string('proof_file')->nullable();
            $table->enum('status', ['pending', 'success', 'failed'])->default('success'); 
            $table->foreignId('order_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('admin_id')->nullable()->constrained('users')->onDelete('set null'); 
            $table->timestamps();
        });
    }
};
