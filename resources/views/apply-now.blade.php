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
        <h2>Business Application Form</h2>

        <form action="{{ route('apply.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="companyName" class="form-label">Company Name <span>*</span></label>
                <input type="text" name="company_name" class="form-control" id="companyName" required>
                @error('company_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dba" class="form-label">DBA</label>
                    <input type="text" name="dba" class="form-control" id="dba">
                    @error('dba')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="dbNumber" class="form-label">D&B Number</label>
                    <input type="text" name="db_number" class="form-control" id="dbNumber">
                    @error('db_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Have you been in business over 5 years?</label>
                    <div>
                        <input type="radio" class="btn-check" name="business_years" id="businessYes"
                            autocomplete="off" value="yes" required>

                        <label class="btn btn-outline-primary" for="businessYes">Yes</label>

                        <input type="radio" class="btn-check" name="business_years" id="businessNo" autocomplete="off"
                            value="no" required>

                        <label class="btn btn-outline-primary" for="businessNo">No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="amountRequested" class="form-label">Amount Requested</label>
                    <input type="number" name="amount_requested" class="form-control" id="amountRequested">
                </div>
            </div>

            <div class="mb-3">
                <label for="businessAddress" class="form-label">Business Address <span>*</span></label>
                <input type="text" name="business_address" class="form-control" id="businessAddress"
                    placeholder="Address Line" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="city" class="form-control" id="city" placeholder="City"
                        required>
                </div>

                <div class="col-md-4">
                    <select class="form-select" name="state" id="state" required>
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <input type="text" name="zip_code" class="form-control" id="zipCode" placeholder="Zip Code"
                        required>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="businessPhone" class="form-label">Business Phone <span>*</span></label>
                    <input type="tel" name="business_phone" class="form-control" id="businessPhone" required>
                </div>

                <div class="col-md-6">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="tel" name="fax" class="form-control" id="fax">
                </div>
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email <span>*</span></label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="federalTaxId" class="form-label">Federal Tax ID <span>*</span></label>
                <input type="text" name="federal_tax_id" class="form-control" id="federalTaxId" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ownershipLength" class="form-label">Length of Ownership</label>
                    <input type="text" name="ownership_length" class="form-control" id="ownershipLength">
                </div>

                <div class="col-md-6">
                    <label for="dateStarted" class="form-label">Date Started <span>*</span></label>
                    <input type="date" name="date_started" class="form-control" id="dateStarted" required>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="entityType" class="form-label">Type of Entity <span>*</span></label>
                    <input type="text" name="entity_type" class="form-control" id="entityType" required>
                </div>

                <div class="col-md-6">
                    <label for="businessType" class="form-label">Type of Business <span>*</span></label>
                    <input type="text" name="business_type" class="form-control" id="businessType" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="productService" class="form-label">Product / Service Sold</label>
                <input type="text" name="product_service" class="form-control" id="productService">
            </div>

            <div class="mb-3">
                <label for="fundingCompany" class="form-label">Existing Funding Company and Balance</label>
                <textarea class="form-control" name="funding_company" id="fundingCompany" rows="3"></textarea>
            </div>

            <h5>Merchant / Owner Information</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ownerName" class="form-label">Owner Name <span>*</span></label>
                    <input type="text" name="owner_name" class="form-control" id="ownerName" required>
                </div>

                <div class="col-md-6">
                    <label for="ownerTitle" class="form-label">Title</label>
                    <input type="text" name="owner_title" class="form-control" id="ownerTitle">
                </div>
            </div>


            <div class="mb-3">
                <label for="ownershipPercentage" class="form-label">Ownership %</label>
                <input type="number" name="ownership_percentage" class="form-control" id="ownershipPercentage">
            </div>

            <div class="mb-3">
                <label for="homeAddress" class="form-label">Home Address <span>*</span></label>
                <input type="text" name="home_address" class="form-control" id="homeAddress"
                    placeholder="Address Line" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="home_city" class="form-control" id="homeCity" placeholder="City"
                        required>
                </div>

                <div class="col-md-4">
                    <select class="form-select" name="home_state" id="homeState" required>
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <input type="text" name="home_zip" class="form-control" id="homeZip"
                        placeholder="Zip Code" required>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="ssn" class="form-label">SSN <span>*</span></label>
                    <input type="text" name="ssn" class="form-control" id="ssn" required>
                </div>

                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth <span>*</span></label>
                    <input type="date" name="dob" class="form-control" id="dob" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="cellPhone" class="form-label">Cell Phone <span>*</span></label>
                <input type="tel" name="cell_phone" class="form-control" id="cellPhone" required>
            </div>

            <h5>Partner Information (if applicable)</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="partnerFirstName" class="form-label">First Name</label>
                    <input type="text" name="partner_first_name" class="form-control" id="partnerFirstName">
                </div>

                <div class="col-md-6">
                    <label for="partnerLastName" class="form-label">Last Name</label>
                    <input type="text" name="partner_last_name" class="form-control" id="partnerLastName">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="partnerTitle" class="form-label">Title</label>
                    <input type="text" name="partner_title" class="form-control" id="partnerTitle">
                </div>

                <div class="col-md-6">
                    <label for="partnerOwnership" class="form-label">Ownership %</label>
                    <input type="number" name="partner_ownership" class="form-control" id="partnerOwnership">
                </div>
            </div>

            <div class="mb-3">
                <label for="partnerAddress" class="form-label">Partner Address</label>
                <input type="text" name="partner_address" class="form-control" id="partnerAddress">
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="partner_city" class="form-control" id="partnerCity"
                        placeholder="City">
                </div>

                <div class="col-md-4">
                    <select class="form-select" name="partner_state" id="partnerState">
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <input type="text" name="partner_zip" class="form-control" id="partnerZipCode"
                        placeholder="Zip Code" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="partnerSSN" class="form-label">Partner SSN</label>
                    <input type="text" name="partner_ssn" class="form-control" id="partnerSSN">
                </div>

                <div class="col-md-6">
                    <label for="partnerDOB" class="form-label">Partner DOB</label>
                    <input type="date" name="partner_dob" class="form-control" id="partnerDOB">
                </div>
            </div>


            <div class="mb-3">
                <label for="partnerPhone" class="form-label">Partner Phone</label>
                <input type="tel" name="partner_phone" class="form-control" id="partnerPhone">
            </div>

            <h5>Business Property Information</h5>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="landlord" class="form-label">Business Landlord or Business Mortgage Bank</label>
                    <input type="text" name="landlord" class="form-control" id="landlord">
                </div>

                <div class="col-md-6">
                    <label for="landLordName" class="form-label">Name</label>
                    <input type="text" name="landlord_name" class="form-control" id="landLordName">
                </div>
            </div>


            <div class="mb-3">
                <label for="landlordPhone" class="form-label">Landlord Phone</label>
                <input type="tel" name="landlord_phone" class="form-control" id="landlordPhone">
            </div>

            <div class="mb-3">
                <p>Applicants authorize Vantage Capital Group, its assigns, agents, banks or financial institutions to
                    obtain an investigative or consumer report from a credit bureau or a credit agency and to
                    investigate the references given on any other statement or data obtained from applicants.</p>
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
                    <input type="date" name="owner_signature_date" class="form-control" id="ownerSignatureDate"
                        required>
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
                    <input type="date" name="partner_signature_date" class="form-control"
                        id="partnerSignatureDate">
                </div>
            </div>


            <div class="mb-3">
                <label for="bankStatements" class="form-label">4 Months Bank Statements (Add Month to Date if
                    Available)</label>
                <input type="file" name="uploaded_bank_statements" class="form-control" id="bankStatements"
                    multiple>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    {{-- @dd("Hi") --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Owner signature pad setup
            var ownerSignaturePad = new SignaturePad(document.getElementById('owner-signature-pad'));
            var partnerSignaturePad = new SignaturePad(document.getElementById('signature-pad'));

            // Handle form submission to capture signature data
            document.querySelector('form').addEventListener('submit', function(e) {
                // Check if the signature pad is empty
                if (!ownerSignaturePad.isEmpty()) {
                    // Set the hidden input value with the signature data (Base64)
                    document.getElementById('owner_signature').value = ownerSignaturePad.toDataURL();
                }

                if (!partnerSignaturePad.isEmpty()) {
                    document.getElementById('partner_signature').value = partnerSignaturePad
                    .toDataURL();
                }
            });

            // Clear button functionality for Owner Signature
            document.getElementById('owner-clear').addEventListener('click', function() {
                ownerSignaturePad.clear();
                document.getElementById('owner_signature').value = ''; // Clear hidden input field
            });

            // Clear button functionality for Partner Signature
            document.getElementById('clear').addEventListener('click', function() {
                partnerSignaturePad.clear();
                document.getElementById('partner_signature').value = ''; // Clear hidden input field
            });
        });
    </script> --}}
</body>

</html>
