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
    {{-- <script src="/resources/js/style.js"></script> --}}
    <!-- Load the Vite JavaScript file -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container mt-5">
        <h2>Business Application Form</h2>
        <form>
            <!-- Company Information -->
            <div class="mb-3">
                <label for="companyName" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="companyName" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dba" class="form-label">DBA</label>
                    <input type="text" class="form-control" id="dba" required>
                </div>
                <div class="col-md-6">
                    <label for="dbNumber" class="form-label">D&B Number</label>
                    <input type="text" class="form-control" id="dbNumber" required>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Have you been in business over 5 years?</label>
                    <div>
                        <input type="radio" class="btn-check" name="businessYears" id="businessYes" autocomplete="off"
                            required>
                        <label class="btn btn-outline-primary" for="businessYes">Yes</label>

                        <input type="radio" class="btn-check" name="businessYears" id="businessNo" autocomplete="off"
                            required>
                        <label class="btn btn-outline-primary" for="businessNo">No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="amountRequested" class="form-label">Amount Requested</label>
                    <input type="number" class="form-control" id="amountRequested" required>
                </div>
            </div>

            <!-- Business Address -->
            <div class="mb-3">
                <label for="businessAddress" class="form-label">Business Address</label>
                <input type="text" class="form-control" id="businessAddress" placeholder="Address Line" required>
            </div>

            <div class="row mb-3">
                <!-- City -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="city" placeholder="City" required>
                </div>

                <!-- State -->
                <div class="col-md-4">
                    <select class="form-select" id="state" required>
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <!-- Zip Code -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" required>
                </div>
            </div>


            <div class="row mb-3">
                <!-- Business Phone -->
                <div class="col-md-6">
                    <label for="businessPhone" class="form-label">Business Phone</label>
                    <input type="tel" class="form-control" id="businessPhone" required>
                </div>

                <!-- Fax -->
                <div class="col-md-6">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="tel" class="form-control" id="fax">
                </div>
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="federalTaxId" class="form-label">Federal Tax ID</label>
                <input type="text" class="form-control" id="federalTaxId" required>
            </div>

            <div class="row mb-3">
                <!-- Length of Ownership -->
                <div class="col-md-6">
                    <label for="ownershipLength" class="form-label">Length of Ownership</label>
                    <input type="text" class="form-control" id="ownershipLength" required>
                </div>

                <!-- Date Started -->
                <div class="col-md-6">
                    <label for="dateStarted" class="form-label">Date Started</label>
                    <input type="date" class="form-control" id="dateStarted" required>
                </div>
            </div>


            <div class="row mb-3">
                <!-- Type of Entity -->
                <div class="col-md-6">
                    <label for="entityType" class="form-label">Type of Entity</label>
                    <input type="text" class="form-control" id="entityType" required>
                </div>

                <!-- Type of Business -->
                <div class="col-md-6">
                    <label for="businessType" class="form-label">Type of Business</label>
                    <input type="text" class="form-control" id="businessType" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="productService" class="form-label">Product / Service Sold</label>
                <input type="text" class="form-control" id="productService" required>
            </div>

            <div class="mb-3">
                <label for="fundingCompany" class="form-label">Existing Funding Company and Balance</label>
                <textarea class="form-control" id="fundingCompany" rows="3"></textarea>
            </div>

            <!-- Owner Information -->
            <h5>Merchant / Owner Information</h5>

            <div class="row mb-3">
                <!-- Owner Name -->
                <div class="col-md-6">
                    <label for="ownerName" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="ownerName" required>
                </div>

                <!-- Owner Title -->
                <div class="col-md-6">
                    <label for="ownerTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="ownerTitle" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="ownershipPercentage" class="form-label">Ownership %</label>
                <input type="number" class="form-control" id="ownershipPercentage" required>
            </div>

            <div class="mb-3">
                <label for="homeAddress" class="form-label">Home Address</label>
                <input type="text" class="form-control" id="homeAddress" placeholder="Address Line" required>
            </div>

            <div class="row mb-3">
                <!-- Home City -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="homeCity" placeholder="City" required>
                </div>

                <!-- Home State -->
                <div class="col-md-4">
                    <select class="form-select" id="homeState" required>
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <!-- Home Zip Code -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="homeZip" placeholder="Zip Code" required>
                </div>
            </div>


            <div class="row mb-3">
                <!-- SSN -->
                <div class="col-md-6">
                    <label for="ssn" class="form-label">SSN</label>
                    <input type="text" class="form-control" id="ssn" required>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="cellPhone" class="form-label">Cell Phone</label>
                <input type="tel" class="form-control" id="cellPhone" required>
            </div>

            <!-- Partner Information -->
            <h5>Partner Information (if applicable)</h5>

            <div class="row mb-3">
                <!-- First Name -->
                <div class="col-md-6">
                    <label for="partnerFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="partnerFirstName">
                </div>

                <!-- Last Name -->
                <div class="col-md-6">
                    <label for="partnerLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="partnerLastName">
                </div>
            </div>


            <div class="row mb-3">
                <!-- Partner Title -->
                <div class="col-md-6">
                    <label for="partnerTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="partnerTitle">
                </div>

                <!-- Ownership % -->
                <div class="col-md-6">
                    <label for="partnerOwnership" class="form-label">Ownership %</label>
                    <input type="number" class="form-control" id="partnerOwnership">
                </div>
            </div>

            <div class="mb-3">
                <label for="partnerAddress" class="form-label">Partner Address</label>
                <input type="text" class="form-control" id="partnerAddress">
            </div>
            <div class="row mb-3">
                <!-- City -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="partnerCity" placeholder="City" required>
                </div>

                <!-- State -->
                <div class="col-md-4">
                    <select class="form-select" id="partnerState" required>
                        <option selected>Select State</option>
                        <option value="1">State 1</option>
                        <option value="2">State 2</option>
                    </select>
                </div>

                <!-- Zip Code -->
                <div class="col-md-4">
                    <input type="text" class="form-control" id="partnerZipCode" placeholder="Zip Code" required>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Partner SSN -->
                <div class="col-md-6">
                    <label for="partnerSSN" class="form-label">Partner SSN</label>
                    <input type="text" class="form-control" id="partnerSSN">
                </div>

                <!-- Partner DOB -->
                <div class="col-md-6">
                    <label for="partnerDOB" class="form-label">Partner DOB</label>
                    <input type="date" class="form-control" id="partnerDOB">
                </div>
            </div>


            <div class="mb-3">
                <label for="partnerPhone" class="form-label">Partner Phone</label>
                <input type="tel" class="form-control" id="partnerPhone">
            </div>

            <!-- Business Property Information -->
            <h5>Business Property Information</h5>

            <div class="row mb-3">
                <!-- Business Landlord or Business Mortgage Bank -->
                <div class="col-md-6">
                    <label for="landlordName" class="form-label">Business Landlord or Business Mortgage Bank</label>
                    <input type="text" class="form-control" id="landlordName">
                </div>

                <!-- Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
            </div>


            <div class="mb-3">
                <label for="landlordPhone" class="form-label">Landlord Phone</label>
                <input type="tel" class="form-control" id="landlordPhone">
            </div>

            <div class="mb-3">
                <p>Applicants authorize Vantage Capital Group, its assigns, agents, banks or financial institutions to
                    obtain an investigative or consumer report from a credit bureau or a credit agency and to
                    investigate the references given on any other statement or data obtained from applicants.</p>
            </div>

            <div class="row mb-3">
                <!-- Owner Signature and Date -->
                <div class="col-md-6">
                    {{-- <label for="ownerSignature" class="form-label">Owner Signature</label>
                    <input type="text" class="form-control" id="ownerSignature"> --}}
                    <div class="flex-row">
                        <div class="wrapper">
                            <canvas id="owner-signature-pad" width="400" height="200"></canvas>
                        </div>
                        <div class="clear-btn">
                            <button id="owner-clear"><span> Clear </span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ownerSignatureDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="ownerSignatureDate">
                </div>
            </div>

            <div class="row mb-3">
                <!-- Partner Signature and Date -->
                <div class="col-md-6">
                    {{-- <label for="partnerSignature" class="form-label">Partner Signature</label>
                    <input type="text" class="form-control" id="partnerSignature"> --}}
                    <div class="flex-row">
                        <div class="wrapper">
                            <canvas id="signature-pad" width="400" height="200"></canvas>
                        </div>
                        <div class="clear-btn">
                            <button id="clear"><span> Clear </span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="partnerSignatureDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="partnerSignatureDate">
                </div>
            </div>


            <!-- Upload Files -->
            <div class="mb-3">
                <label for="bankStatements" class="form-label">4 Months Bank Statements (Add Month to Date if
                    Available)</label>
                <input type="file" class="form-control" id="bankStatements" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
