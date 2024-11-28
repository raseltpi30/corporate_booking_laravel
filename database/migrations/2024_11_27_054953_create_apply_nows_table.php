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
        Schema::create('apply_nows', function (Blueprint $table) {
            $table->id();
            // Company Information
            $table->string('company_name');
            $table->string('dba')->nullable();
            $table->string('db_number')->nullable();
            $table->enum('business_years', ['yes', 'no'])->nullable();
            $table->decimal('amount_requested', 15, 2)->nullable();
            $table->string('business_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('business_phone');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('federal_tax_id');
            $table->string('ownership_length')->nullable();
            $table->date('date_started');
            $table->string('entity_type');
            $table->string('business_type');
            $table->string('product_service')->nullable();
            $table->text('funding_company')->nullable();

            // Owner Information
            $table->string('owner_name');
            $table->string('owner_title')->nullable();
            $table->decimal('ownership_percentage', 5, 2)->nullable();
            $table->string('home_address');
            $table->string('home_city');
            $table->string('home_state');
            $table->string('home_zip');
            $table->string('ssn');
            $table->date('dob');
            $table->string('cell_phone');

            // Partner   (optional)
            $table->string('partner_first_name')->nullable();
            $table->string('partner_last_name')->nullable();
            $table->string('partner_title')->nullable();
            $table->decimal('partner_ownership_percentage', 5, 2)->nullable();
            $table->string('partner_address')->nullable();
            $table->string('partner_city')->nullable();
            $table->string('partner_state')->nullable();
            $table->string('partner_zip_code')->nullable();
            $table->string('partner_ssn')->nullable();
            $table->date('partner_dob')->nullable();
            $table->string('partner_phone')->nullable();

            // Business Property Information
            $table->string('landlord')->nullable();
            $table->string('landlord_name')->nullable();
            $table->string('landlord_phone')->nullable();

            // Signature & Date
            $table->string('owner_signature'); // You can store signature as base64 or file path
            $table->date('owner_signature_date');
            $table->string('partner_signature')->nullable(); // Partner signature
            $table->date('partner_signature_date')->nullable();

            // Upload Files
            $table->string('uploaded_bank_statements')->nullable();  // For multiple file paths as an array

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_nows');
    }
};
