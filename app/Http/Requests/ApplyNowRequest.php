<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyNowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'dba' => 'string|max:255',
            'db_number' => 'string|max:255',
            'business_years' => 'in:yes,no',
            'amount_requested' => 'numeric|min:0',
            'business_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255', // You might want to use an enum or validation for valid states
            'zip_code' => 'required|string|max:20',
            'business_phone' => 'required|phone', // You can use a custom phone validation or regex
            'fax' => 'nullable|phone',
            'email' => 'required|email|max:255',
            'federal_tax_id' => 'required|string|max:255',
            'ownership_length' => 'string|max:255',
            'date_started' => 'required|date',
            'entity_type' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'product_service' => 'string|max:255',
            'funding_company' => 'string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_title' => 'string|max:255',
            'ownership_percentage' => 'numeric|min:0|max:100',
            'home_address' => 'required|string|max:255',
            'home_city' => 'required|string|max:255',
            'home_state' => 'required|string|max:255', // You might want to use an enum or validation for valid states
            'home_zip' => 'required|string|max:20',
            'ssn' => 'required|string|max:11', // Assuming US SSN format
            'dob' => 'required|date',
            'cell_phone' => 'required|phone',
            'partner_first_name' => 'nullable|string|max:255',
            'partner_last_name' => 'nullable|string|max:255',
            'partner_title' => 'nullable|string|max:255',
            'partner_ownership_percentage' => 'nullable|numeric|min:0|max:100',
            'partner_address' => 'nullable|string|max:255',
            'partner_city' => 'nullable|string|max:255',
            'partner_state' => 'nullable|string|max:255',
            'partner_zip_code' => 'nullable|string|max:20',
            'partner_ssn' => 'nullable|string|max:11', // Assuming US SSN format
            'partner_dob' => 'nullable|date',
            'partner_phone' => 'nullable|phone',

            'landlord' => 'nullable|string|max:255',
            'landlord_name' => 'nullable|string|max:255',
            'landlord_phone' => 'nullable|phone',

            'owner_signature' => 'required|string', // For signature (store base64 or file path)
            'owner_signature_date' => 'required|date',

            'partner_signature' => 'nullable|string', // For signature (store base64 or file path)
            'partner_signature_date' => 'nullable|date',

            'uploaded_bank_statements.*' => 'file|mimes:pdf,jpeg,jpg,png|max:2048', // Validate file types and size
        ];
    }
}
