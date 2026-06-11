<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointment_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_title');
            $table->string('appointment_duration')->nullable();
            $table->string('appointment_price')->nullable();
            $table->date('appointment_date');
            $table->string('appointment_time', 32);
            $table->string('timezone', 120)->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone', 40);
            $table->string('email');
            $table->string('status', 40)->default('pending_payment');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointment_bookings');
    }
};
