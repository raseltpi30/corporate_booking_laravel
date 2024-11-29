<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Business Application</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">New Business Application Submission</h2>

        <!-- Company Information Section -->
        <div class="mb-4">
            <h3 class="mb-3">Company Information</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Company Name:</strong> {{ $data['company_name'] }}</li>
                <li class="list-group-item"><strong>DBA:</strong> {{ $data['dba'] }}</li>
                <li class="list-group-item"><strong>DB Number:</strong> {{ $data['db_number'] }}</li>
                <li class="list-group-item"><strong>Business Years:</strong> {{ $data['business_years'] }}</li>
                <li class="list-group-item"><strong>Amount Requested:</strong> {{ $data['amount_requested'] }}</li>
                <li class="list-group-item"><strong>Business Address:</strong> {{ $data['business_address'] }}</li>
                <li class="list-group-item"><strong>City:</strong> {{ $data['city'] }}</li>
                <li class="list-group-item"><strong>State:</strong> {{ $data['state'] }}</li>
                <li class="list-group-item"><strong>Zip Code:</strong> {{ $data['zip_code'] }}</li>
                <li class="list-group-item"><strong>Business Phone:</strong> {{ $data['business_phone'] }}</li>
                <li class="list-group-item"><strong>Fax:</strong> {{ $data['fax'] }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
            </ul>
        </div>

        <!-- Owner Information Section -->
        <div class="mb-4">
            <h3 class="mb-3">Owner Information</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Owner Name:</strong> {{ $data['owner_name'] }}</li>
                <li class="list-group-item"><strong>Title:</strong> {{ $data['owner_title'] }}</li>
                <li class="list-group-item"><strong>Ownership Percentage:</strong> {{ $data['ownership_percentage'] }}</li>
                <li class="list-group-item"><strong>Home Address:</strong> {{ $data['home_address'] }}</li>
                <li class="list-group-item"><strong>City:</strong> {{ $data['home_city'] }}</li>
                <li class="list-group-item"><strong>State:</strong> {{ $data['home_state'] }}</li>
                <li class="list-group-item"><strong>Zip:</strong> {{ $data['home_zip'] }}</li>
                <li class="list-group-item"><strong>SSN:</strong> {{ $data['ssn'] }}</li>
                <li class="list-group-item"><strong>Date of Birth:</strong> {{ $data['dob'] }}</li>
                <li class="list-group-item"><strong>Cell Phone:</strong> {{ $data['cell_phone'] }}</li>
            </ul>
        </div>

        <!-- Partner Information Section (Conditional) -->
        @if($data['partner_first_name'])
        <div class="mb-4">
            <h3 class="mb-3">Partner Information (if applicable)</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Partner First Name:</strong> {{ $data['partner_first_name'] }}</li>
                <li class="list-group-item"><strong>Partner Last Name:</strong> {{ $data['partner_last_name'] }}</li>
                <li class="list-group-item"><strong>Partner Title:</strong> {{ $data['partner_title'] }}</li>
                <li class="list-group-item"><strong>Partner Ownership Percentage:</strong> {{ $data['partner_ownership_percentage'] }}</li>
                <li class="list-group-item"><strong>Partner Address:</strong> {{ $data['partner_address'] }}</li>
                <li class="list-group-item"><strong>Partner City:</strong> {{ $data['partner_city'] }}</li>
                <li class="list-group-item"><strong>Partner State:</strong> {{ $data['partner_state'] }}</li>
                <li class="list-group-item"><strong>Partner Zip Code:</strong> {{ $data['partner_zip_code'] }}</li>
                <li class="list-group-item"><strong>Partner SSN:</strong> {{ $data['partner_ssn'] }}</li>
                <li class="list-group-item"><strong>Partner Date of Birth:</strong> {{ $data['partner_dob'] }}</li>
                <li class="list-group-item"><strong>Partner Phone:</strong> {{ $data['partner_phone'] }}</li>
            </ul>
        </div>
        @endif

        <!-- Business Property Information Section -->
        <div class="mb-4">
            <h3 class="mb-3">Business Property Information</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Landlord Name:</strong> {{ $data['landlord'] }}</li>
                <li class="list-group-item"><strong>Landlord Phone:</strong> {{ $data['landlord_phone'] }}</li>
            </ul>
        </div>

        {{-- <!-- Signatures Section -->
        <div class="mb-4">
            <h3 class="mb-3">Signatures</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Owner Signature:</strong> {{ $data['owner_signature'] }}</li>
                <li class="list-group-item"><strong>Partner Signature:</strong> {{ $data['partner_signature'] }}</li>
            </ul>
        </div>

        <!-- Uploaded Files Section -->
        <div class="mb-4">
            <h3 class="mb-3">Uploaded Files</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Uploaded Bank Statements:</strong> {{ $data['uploaded_bank_statements'] }}</li>
            </ul>
        </div> --}}
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
