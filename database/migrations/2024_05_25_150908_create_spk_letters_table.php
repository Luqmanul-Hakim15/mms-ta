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
        Schema::create('spk_letters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('header_id')->constrained('header_templates')->onDelete('cascade');
            $table->foreignId('footer_id')->constrained('footer_templates')->onDelete('cascade');
            $table->string('company_client');
            $table->string('project_name');
            $table->string('reference_number');
            $table->date('date');
            $table->string('date_spelling');
            $table->string('identification_number');
            $table->string('tax_identification_number');
            $table->string('client_name');
            $table->text('item');
            $table->text('application_text');
            $table->string('training_day');
            $table->integer('development_time');
            $table->text('work_scope');
            $table->string('pic_name1');
            $table->string('pic_name2');
            $table->text('person_1_rights');
            $table->text('person_2_rights');
            $table->text('person_1_obligations');
            $table->text('person_2_obligations');
            $table->string('application_cost');
            $table->integer('application_pay_time');
            $table->integer('agreement_duration');
            $table->string('tax_cost');
            $table->integer('payment_limit_day');
            $table->date('start_date');
            $table->string('start_date_spell');
            $table->date('end_date');
            $table->string('end_date_spell');
            $table->text('intellectual_property');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spk_letters');
    }
};
