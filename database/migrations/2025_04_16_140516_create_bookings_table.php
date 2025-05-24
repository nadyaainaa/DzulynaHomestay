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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
        
            // Foreign key for homestays
            $table->foreignId('homestay_id')->constrained('homestays')->onDelete('cascade');
        
            // Foreign key for customers/users
            $table->foreignId('cust_id')->constrained('users')->onDelete('cascade');
        
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('days');
            $table->decimal('price', 8, 2);
        
            // Nullable foreign key to payments
            $table->foreignId('payment_id')->nullable()->constrained();
        
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
