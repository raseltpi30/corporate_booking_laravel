<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplyNow;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class ApplyNowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate fake data for ApplyNow model
        $applyNow = ApplyNow::create([
            'company_name' => $faker->company,
            'dba' => $faker->companySuffix,
            'db_number' => $faker->regexify('[A-Za-z0-9]{10}'),
            'business_years' => $faker->randomElement(['yes', 'no']),
            'amount_requested' => $faker->randomFloat(2, 5000, 50000),
            'business_address' => $faker->address,
            'city' => $faker->city,
            'state' => $faker->state,
            'zip_code' => $faker->postcode,
            'business_phone' => $faker->phoneNumber,
            'fax' => $faker->phoneNumber,
            'email' => $faker->companyEmail,
            'federal_tax_id' => $faker->ssn,
            'ownership_length' => $faker->randomElement(['1 year', '5 years', '10 years']),
            'date_started' => $faker->date,
            'entity_type' => $faker->word,
            'business_type' => $faker->word,
            'product_service' => $faker->word,
            'funding_company' => $faker->company,
            'owner_name' => $faker->name,
            'owner_title' => $faker->title,
            'ownership_percentage' => $faker->numberBetween(1, 100),
            'home_address' => $faker->address,
            'home_city' => $faker->city,
            'home_state' => $faker->state,
            'home_zip' => $faker->postcode,
            'ssn' => $faker->ssn,
            'dob' => $faker->date,
            'cell_phone' => $faker->phoneNumber,
            'partner_first_name' => $faker->firstName,
            'partner_last_name' => $faker->lastName,
            'partner_title' => $faker->title,
            'partner_ownership_percentage' => $faker->numberBetween(1, 100),
            'partner_address' => $faker->address,
            'partner_city' => $faker->city,
            'partner_state' => $faker->state,
            'partner_zip_code' => $faker->postcode,
            'partner_ssn' => $faker->ssn,
            'partner_dob' => $faker->date,
            'partner_phone' => $faker->phoneNumber,
            'landlord' => $faker->company,
            'landlord_name' => $faker->name,
            'landlord_phone' => $faker->phoneNumber,
            'owner_signature' => $this->generateFakeSignature(),
            'owner_signature_date' => $faker->date,
            'partner_signature' => $this->generateFakeSignature(),
            'partner_signature_date' => $faker->date,
            'uploaded_bank_statements' => json_encode([$this->generateFakeBankStatement()]),
        ]);

        // Output for verification
        $this->command->info("Fake ApplyNow record created: {$applyNow->company_name}");
    }

    // Helper method to generate a fake signature (base64 encoded)
    private function generateFakeSignature()
    {
        // Example: Generate a fake signature image (base64 encoded)
        $image = imagecreatetruecolor(200, 50);
        $background = imagecolorallocate($image, 255, 255, 255);
        $textColor = imagecolorallocate($image, 0, 0, 0);
        imagestring($image, 5, 50, 15, "Signature", $textColor);
        $filePath = storage_path('app/public/signatures/').uniqid('signature_').'.png';
        imagepng($image, $filePath);
        imagedestroy($image);

        // Encode the image as base64
        return 'data:image/png;base64,' . base64_encode(file_get_contents($filePath));
    }

    // Helper method to generate a fake bank statement file path (in public storage)
    private function generateFakeBankStatement()
    {
        $file = fake()->image(storage_path('app/public/uploads/bank_statements'), 800, 600, null, false); // Create an image as a fake bank statement
        return $file;
    }
}
