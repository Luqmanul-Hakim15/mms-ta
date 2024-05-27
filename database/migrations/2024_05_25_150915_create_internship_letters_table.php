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
        Schema::create('internship_letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('header_id')->constrained('header_templates')->onDelete('cascade');
            $table->foreignId('footer_id')->constrained('footer_templates')->onDelete('cascade');
            $table->foreignId('verificator_id')->constrained('verificators')->onDelete('cascade');
            $table->string('reference_number');
            $table->string('name');
            $table->date('date_created');
            $table->string('identification_number');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->text('address');
            $table->string('location_from');
            $table->string('intern_position');
            $table->boolean('paid');
            $table->string('meal_allowance');
            $table->string('transport_allowance');
            $table->integer('payment_time');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('need_verification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_letters');
    }
};
