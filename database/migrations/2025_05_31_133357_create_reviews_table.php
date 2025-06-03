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
         Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            // Foreign key to users (customers)
            $table->foreignId('cust_id')->constrained('users')->onDelete('cascade');

            // Foreign key to homestays
            $table->foreignId('homestay_id')->constrained('homestays')->onDelete('cascade');

            // Foreign key to bookings
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');

            $table->unsignedTinyInteger('rating')->nullable(); // 1 to 5
            $table->text('comment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
