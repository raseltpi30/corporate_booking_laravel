<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Application Form</title>
    <link rel="stylesheet" href="/resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* General Form and Error Styling */
        .form-label span {
            color: red;
        }

        .error-message {
            color: red;
            font-size: 0.875em;
        }

        /* Signature Canvas Styling */
        .signature-canvas {
            border: 1px solid #ccc;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .signature-canvas-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .clear-btn button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .clear-btn button:hover {
            background-color: #c82333;
        }

        /* Form Heading */
        .form-heading {
            margin-top: 30px;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        /* Custom Card Styling */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #5e72e4;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.1rem;
        }

        .card-body p {
            font-size: 1rem;
            color: #555;
        }

        .alert alert-success{
            background-color: #5e72e4;
        }
        .card-body .row p {
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 20px;
            color: #333;
        }

        .btn-details {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn-details:hover {
            background-color: #218838;
            text-decoration: none;
        }

        .signature-image {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        .additional-files ul {
            list-style-type: none;
            padding: 0;
        }

        .additional-files li {
            margin-bottom: 10px;
        }

        .additional-files a {
            color: #007bff;
            text-decoration: none;
        }

        .additional-files a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1100px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js"
        integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary">Business Application</h2>

        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card-header">
                Application Information
            </div>
            <div class="card-body">

                <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name <span>*</span></label>
                        <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control"
                            id="companyName" required>
                    </div>
                    @if ($errors->has('company_name'))
                        <div class="alert alert-danger">{{ $errors->first('partner_zip_code') }}</div>
                    @endif
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dba" class="form-label">DBA</label>
                            <input type="text" name="dba" value="{{ old('dba') }}" class="form-control"
                                id="dba">
                        </div>
                        @if ($errors->has('dba'))
                            <div class="alert alert-danger">{{ $errors->first('dba') }}</div>
                        @endif
                        <div class="col-md-6">
                            <label for="dbNumber" class="form-label">D&B Number</label>
                            <input type="text" name="db_number" value="{{ old('db_number') }}" class="form-control"
                                id="dbNumber">
                        </div>
                        @if ($errors->has('db_number'))
                            <div class="alert alert-danger">{{ $errors->first('db_number') }}</div>
                        @endif
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="businessYears">Do you have more than 5 years in business?</label>
                            <div>
                                <input type="radio" class="btn-check" name="business_years" id="businessYes"
                                    autocomplete="off" value="yes"
                                    {{ old('business_years') == 'yes' ? 'checked' : '' }} required>
                                <label class="btn btn-outline-primary" for="businessYes">Yes</label>

                                <input type="radio" class="btn-check" name="business_years" id="businessNo"
                                    autocomplete="off" value="no"
                                    {{ old('business_years') == 'no' ? 'checked' : '' }} required>
                                <label class="btn btn-outline-primary" for="businessNo">No</label>
                            </div>
                            @error('business_years')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="amountRequested" class="form-label">Amount Requested</label>
                            <input type="number" name="amount_requested" value="{{ old('amount_requested') }}"
                                class="form-control" id="amountRequested">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="businessAddress" class="form-label">Business Address <span>*</span></label>
                        <input type="text" name="business_address" value="{{ old('business_address') }}"
                            class="form-control" id="businessAddress" placeholder="Address Line" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control"
                                id="city" placeholder="City" required>
                        </div>

                        <div class="col-md-4">
                            <select class="form-select" name="state" id="state" required>
                                <option selected>Select State</option>
                                <option value="1" {{ old('state') == '1' ? 'selected' : '' }}>State 1</option>
                                <option value="2" {{ old('state') == '2' ? 'selected' : '' }}>State 2</option>
                                <option value="3" {{ old('state') == '3' ? 'selected' : '' }}>State 3</option>
                            </select>
                            @error('state')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="zip_code" value="{{ old('zip_code') }}"
                                class="form-control" id="zipCode" placeholder="Zip Code" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="businessPhone" class="form-label">Business Phone <span>*</span></label>
                            <input type="tel" class="form-control" id="businessPhone"
                                value="{{ old('business_phone') }}" name="business_phone"
                                placeholder="Enter phone number" required>
                        </div>


                        <div class="col-md-6">
                            <label for="fax" class="form-label">Fax</label>
                            <input type="tel" value="{{ old('fax') }}" class="form-control" id="fax"
                                name="fax" placeholder="Enter fax number">
                            <!-- Display error if validation fails -->
                            @error('fax')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span>*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="federalTaxId" class="form-label">Federal Tax ID <span>*</span></label>
                        <input type="text" name="federal_tax_id" value="{{ old('federal_tax_id') }}"
                            class="form-control" id="federalTaxId" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ownershipLength" class="form-label">Length of Ownership</label>
                            <input type="text" name="ownership_length" value="{{ old('ownership_length') }}"
                                class="form-control" id="ownershipLength">
                        </div>

                        <div class="col-md-6">
                            <label for="dateStarted" class="form-label">Date Started <span>*</span></label>
                            <input type="date" name="date_started" value="{{ old('date_started') }}"
                                class="form-control" id="dateStarted" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="entityType" class="form-label">Type of Entity <span>*</span></label>
                            <input type="text" name="entity_type" value="{{ old('entity_type') }}"
                                class="form-control" id="entityType" required>
                        </div>

                        <div class="col-md-6">
                            <label for="businessType" class="form-label">Type of Business <span>*</span></label>
                            <input type="text" name="business_type" value="{{ old('business_type') }}"
                                class="form-control" id="businessType" required>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="productService" class="form-label">Product / Service Sold</label>
                        <input type="text" name="product_service" value="{{ old('product_service') }}"
                            class="form-control" id="productService">
                    </div>

                    <div class="mb-3">
                        <label for="fundingCompany" class="form-label">Existing Funding Company and Balance</label>
                        {{-- <textarea class="form-control" name="funding_company" value="{{ old('funding_company') }}" id="fundingCompany"
                            rows="3"></textarea> --}}
                        <input type="text" name="funding_company" value="{{ old('funding_company') }}"
                            class="form-control" id="fundingCompany">
                    </div>

                    <h5>Merchant / Owner Information</h5>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ownerName" class="form-label">Owner Name <span>*</span></label>
                            <input type="text" name="owner_name" value="{{ old('owner_name') }}"
                                class="form-control" id="ownerName" required>
                        </div>

                        <div class="col-md-6">
                            <label for="ownerTitle" class="form-label">Title</label>
                            <input type="text" name="owner_title" value="{{ old('owner_title') }}"
                                class="form-control" id="ownerTitle">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="ownershipPercentage" class="form-label">Ownership %</label>
                        <input type="number" name="ownership_percentage" value="{{ old('ownership_percentage') }}"
                            class="form-control" id="ownershipPercentage">
                    </div>

                    <div class="mb-3">
                        <label for="homeAddress" class="form-label">Home Address <span>*</span></label>
                        <input type="text" name="home_address" value="{{ old('home_address') }}"
                            class="form-control" id="homeAddress" placeholder="Address Line" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" name="home_city" value="{{ old('home_city') }}"
                                class="form-control" id="homeCity" placeholder="City" required>
                        </div>

                        <div class="col-md-4">
                            <select class="form-select" name="home_state" id="state" required>
                                <option selected>Select State</option>
                                <option value="1" {{ old('home_state') == '1' ? 'selected' : '' }}>State 1
                                </option>
                                <option value="2" {{ old('home_state') == '2' ? 'selected' : '' }}>State 2
                                </option>
                                <option value="3" {{ old('home_state') == '3' ? 'selected' : '' }}>State 3
                                </option>
                            </select>
                            @error('home_state')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="home_zip" value="{{ old('home_zip') }}"
                                class="form-control" id="homeZip" placeholder="Zip Code" required
                                pattern="\d{5,10}">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ssn" class="form-label">SSN <span>*</span></label>
                            <input type="text" name="ssn" value="{{ old('ssn') }}" class="form-control"
                                id="ssn" pattern="\d{3}-\d{2}-\d{4}" placeholder="XXX-XX-XXXX" required>
                        </div>


                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth <span>*</span></label>
                            <input type="date" name="dob" value="{{ old('dob') }}" class="form-control"
                                id="dob" required>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="cellPhone" class="form-label">Cell Phone <span>*</span></label>
                        <input type="tel" value="{{ old('cell_phone') }}" class="form-control"
                            id="businessPhone" name="cell_phone" placeholder="Enter phone number" required>
                    </div>

                    <!-- Display validation errors -->
                    @if ($errors->has('cell_phone'))
                        <div class="alert alert-danger">{{ $errors->first('cell_phone') }}</div>
                    @endif


                    <h5>Partner Information (if applicable)</h5>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="partnerFirstName" class="form-label">First Name</label>
                            <input type="text" name="partner_first_name" value="{{ old('partner_first_name') }}"
                                class="form-control" id="partnerFirstName">
                        </div>

                        <div class="col-md-6">
                            <label for="partnerLastName" class="form-label">Last Name</label>
                            <input type="text" name="partner_last_name" value="{{ old('partner_last_name') }}"
                                class="form-control" id="partnerLastName">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="partnerTitle" class="form-label">Title</label>
                            <input type="text" name="partner_title" value="{{ old('partner_title') }}"
                                class="form-control" id="partnerTitle">
                        </div>

                        <div class="col-md-6">
                            <label for="partnerOwnership" class="form-label">Ownership %</label>
                            <input type="number" name="partner_ownership_percentage"
                                value="{{ old('partner_ownership_percentage') }}" class="form-control"
                                id="partnerOwnership" min="0" max="100">
                        </div>

                        @if ($errors->has('partner_ownership_percentage'))
                            <div class="alert alert-danger">{{ $errors->first('partner_ownership_percentage') }}</div>
                        @endif

                    </div>

                    <div class="mb-3">
                        <label for="partnerAddress" class="form-label">Partner Address</label>
                        <input type="text" name="partner_address" value="{{ old('partner_address') }}"
                            class="form-control" id="partnerAddress">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" name="partner_city" value="{{ old('partner_city') }}"
                                class="form-control" id="partnerCity" placeholder="City">
                        </div>

                        <div class="col-md-4">
                            <select class="form-select" name="partner_state" id="state" required>
                                <option selected>Select State</option>
                                <option value="1" {{ old('partner_state') == '1' ? 'selected' : '' }}>State 1
                                </option>
                                <option value="2" {{ old('partner_state') == '2' ? 'selected' : '' }}>State 2
                                </option>
                                <option value="3" {{ old('partner_state') == '3' ? 'selected' : '' }}>State 3
                                </option>
                            </select>
                            @error('partner_state')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="partnerZipCode" class="form-label">Parent Zip Code</label>
                            <input type="text" name="partner_zip_code" value="{{ old('partner_zip_code') }}"
                                class="form-control" id="partnerZipCode" placeholder="Parent Zip Code" required>
                        </div>

                        @if ($errors->has('partner_zip_code'))
                            <div class="alert alert-danger">{{ $errors->first('partner_zip_code') }}</div>
                        @endif
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="partnerSSN" class="form-label">Partner SSN</label>
                            <input type="text" name="partner_ssn" value="{{ old('partner_ssn') }}"
                                class="form-control" id="partnerSSN">
                        </div>

                        <div class="col-md-6">
                            <label for="partnerDOB" class="form-label">Partner DOB</label>
                            <input type="date" name="partner_dob" value="{{ old('partner_dob') }}"
                                class="form-control" id="partnerDOB">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="partnerPhone" class="form-label">Partner Phone</label>
                        {{-- <input type="tel" name="partner_phone" value="{{ old('partner_phone') }}" class="form-control"
                            id="partnerPhone"> --}}
                        <input type="tel" class="form-control" id="partnerPhone"
                            value="{{ old('partner_phone') }}" name="partner_phone" placeholder="Enter phone number"
                            required>
                    </div>

                    <h5>Business Property Information</h5>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="landlord" class="form-label">Business Landlord or Business Mortgage
                                Bank</label>
                            <input type="text" name="landlord" value="{{ old('landlord') }}"
                                class="form-control" id="landlord">
                        </div>

                        <div class="col-md-6">
                            <label for="landLordName" class="form-label">Name</label>
                            <input type="text" name="landlord_name" value="{{ old('landlord_name') }}"
                                class="form-control" id="landLordName">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="landlordPhone" class="form-label">Landlord Phone</label>
                        <input type="tel" name="landlord_phone" value="{{ old('landlord_phone') }}"
                            class="form-control" id="landlordPhone">
                    </div>

                    <div class="mb-3">
                        <p>Applicants authorize Vantage Capital Group, its assigns, agents, banks or financial
                            institutions to
                            obtain an investigative or consumer report from a credit bureau or a credit agency and to
                            investigate the references given on any other statement or data obtained from applicants.
                        </p>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="flex-row">
                                <div class="wrapper">
                                    {{-- <canvas id="owner-signature-pad" name="owner_signature" width="400" height="200"></canvas> --}}
                                    <canvas id="owner-signature-pad" width="400" height="200"></canvas>
                                    <input type="hidden" name="owner_signature" id="owner_signature" />
                                </div>
                                <div class="clear-btn">
                                    <button id="owner-clear"><span> Clear </span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="ownerSignatureDate" class="form-label">Date <span>*</span></label>
                            <input type="date" name="owner_signature_date"
                                value="{{ old('owner_signature_date') }}" class="form-control"
                                id="ownerSignatureDate" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="flex-row">
                                <div class="wrapper">
                                    {{-- <canvas id="signature-pad" name="partner_signature" width="400"
                                        height="200"></canvas> --}}
                                    <!-- Partner Signature Canvas -->
                                    <canvas id="signature-pad" width="400" height="200"></canvas>
                                    <input type="hidden" name="partner_signature" id="partner_signature" />
                                </div>
                                <div class="clear-btn">
                                    <button id="clear"><span> Clear </span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="partnerSignatureDate" class="form-label">Date</label>
                            <input type="date" name="partner_signature_date"
                                value="{{ old('partner_signature_date') }}" class="form-control"
                                id="partnerSignatureDate">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="bankStatements" class="form-label">
                            4 Months Bank Statements (Add Month to Date if Available)
                        </label>
                        <input type="file" name="uploaded_bank_statements[]" class="form-control"
                            id="bankStatements" multiple>

                        @error('uploaded_bank_statements')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
