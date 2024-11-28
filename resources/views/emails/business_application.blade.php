<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Business Application</title>
</head>

<body>
    <h2>New Business Application Submission</h2>

    <h3>Company Information</h3>
    <ul>
        <li><strong>Company Name:</strong> {{ $data['company_name'] }}</li>
        <li><strong>DBA:</strong> {{ $data['dba'] }}</li>
        <li><strong>DB Number:</strong> {{ $data['db_number'] }}</li>
        <li><strong>Business Years:</strong> {{ $data['business_years'] }}</li>
        <li><strong>Amount Requested:</strong> {{ $data['amount_requested'] }}</li>
        <li><strong>Business Address:</strong> {{ $data['business_address'] }}</li>
        <li><strong>City:</strong> {{ $data['city'] }}</li>
        <li><strong>State:</strong> {{ $data['state'] }}</li>
        <li><strong>Zip Code:</strong> {{ $data['zip_code'] }}</li>
        <li><strong>Business Phone:</strong> {{ $data['business_phone'] }}</li>
        <li><strong>Fax:</strong> {{ $data['fax'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
    </ul>

    <h3>Owner Information</h3>
    <ul>
        <li><strong>Owner Name:</strong> {{ $data['owner_name'] }}</li>
        <li><strong>Title:</strong> {{ $data['owner_title'] }}</li>
        <li><strong>Ownership Percentage:</strong> {{ $data['ownership_percentage'] }}</li>
        <li><strong>Home Address:</strong> {{ $data['home_address'] }}</li>
        <li><strong>City:</strong> {{ $data['home_city'] }}</li>
        <li><strong>State:</strong> {{ $data['home_state'] }}</li>
        <li><strong>Zip:</strong> {{ $data['home_zip'] }}</li>
        <li><strong>SSN:</strong> {{ $data['ssn'] }}</li>
        <li><strong>Date of Birth:</strong> {{ $data['dob'] }}</li>
        <li><strong>Cell Phone:</strong> {{ $data['cell_phone'] }}</li>
    </ul>

    <h3>Partner Information (if applicable)</h3>
    @if($data['partner_first_name'])
        <ul>
            <li><strong>Partner First Name:</strong> {{ $data['partner_first_name'] }}</li>
            <li><strong>Partner Last Name:</strong> {{ $data['partner_last_name'] }}</li>
            <li><strong>Partner Title:</strong> {{ $data['partner_title'] }}</li>
            <li><strong>Partner Ownership Percentage:</strong> {{ $data['partner_ownership_percentage'] }}</li>
            <li><strong>Partner Address:</strong> {{ $data['partner_address'] }}</li>
            <li><strong>Partner City:</strong> {{ $data['partner_city'] }}</li>
            <li><strong>Partner State:</strong> {{ $data['partner_state'] }}</li>
            <li><strong>Partner Zip Code:</strong> {{ $data['partner_zip_code'] }}</li>
            <li><strong>Partner SSN:</strong> {{ $data['partner_ssn'] }}</li>
            <li><strong>Partner Date of Birth:</strong> {{ $data['partner_dob'] }}</li>
            <li><strong>Partner Phone:</strong> {{ $data['partner_phone'] }}</li>
        </ul>
    @endif

    <h3>Business Property Information</h3>
    <ul>
        <li><strong>Landlord Name:</strong> {{ $data['landlord'] }}</li>
        <li><strong>Landlord Phone:</strong> {{ $data['landlord_phone'] }}</li>
    </ul>

    <h3>Signatures</h3>
    <ul>
        <li><strong>Owner Signature:</strong> {{ $data['owner_signature'] }}</li>
        <li><strong>Partner Signature:</strong> {{ $data['partner_signature'] }}</li>
    </ul>

    <h3>Uploaded Files</h3>
    <ul>
        <li><strong>Uploaded Bank Statements:</strong> {{ $data['uploaded_bank_statements'] }}</li>
    </ul>
</body>

</html>
