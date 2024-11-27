<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyNow extends Model
{
    // protected $table = 'apply_nows';
    protected $fillable = [
        // Company Information
        'company_name',
        'dba',
        'db_number',
        'business_years',
        'amount_requested',
        'business_address',
        'city',
        'state',
        'zip_code',
        'business_phone',
        'fax',
        'email',
        'federal_tax_id',
        'ownership_length',
        'date_started',
        'entity_type',
        'business_type',
        'product_service',
        'funding_company',

        // Owner Information
        'owner_name',
        'owner_title',
        'ownership_percentage',
        'home_address',
        'home_city',
        'home_state',
        'home_zip',
        'ssn',
        'dob',
        'cell_phone',

        // Partner Information (optional)
        'partner_first_name',
        'partner_last_name',
        'partner_title',
        'partner_ownership_percentage',
        'partner_address',
        'partner_city',
        'partner_state',
        'partner_zip_code',
        'partner_ssn',
        'partner_dob',
        'partner_phone',

        // Business Property Information
        'landlord',
        'landlord_name',
        'landlord_phone',

        // Signature & Date
        'owner_signature',
        'owner_signature_date',
        
        'partner_signature',
        'partner_signature_date',

        // Upload Files
        'uploaded_bank_statements',
    ];
}
