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
        Schema::create('bast_letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('header_id')->constrained('header_templates')->onDelete('cascade');
            $table->foreignId('footer_id')->constrained('footer_templates')->onDelete('cascade');
            $table->string('reference_number');
            $table->date('date');
            $table->string('name');
            $table->string('born');
            $table->text('address');
            $table->string('identification_number');
            $table->date('offer_date');
            $table->text('application_item');
            $table->string('company_client');
            $table->string('client_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bast_letters');
    }
};
