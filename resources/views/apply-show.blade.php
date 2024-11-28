<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Application Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
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
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-blue-800 leading-tight text-center">
                {{ __('Business Application Details') }}
            </h2>
        </x-slot>
        <div class="container mt-5">

            <div class="card">
                <div class="card-header">
                    Application Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Company Name:</strong> {{ $applyNow->company_name }}</p>
                            <p><strong>DBA:</strong> {{ $applyNow->dba }}</p>
                            <p><strong>Business Phone:</strong> {{ $applyNow->business_phone }}</p>
                            <p><strong>Email:</strong> {{ $applyNow->email }}</p>
                            <p><strong>Amount Requested:</strong> ${{ number_format($applyNow->amount_requested, 2) }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Owner Name:</strong> {{ $applyNow->owner_name }}</p>
                            <p><strong>Owner Title:</strong> {{ $applyNow->owner_title }}</p>
                            <p><strong>Ownership Percentage:</strong> {{ $applyNow->ownership_percentage }}%</p>
                            <p><strong>SSN:</strong> {{ $applyNow->ssn }}</p>
                            <p><strong>Business Address:</strong> {{ $applyNow->business_address }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Partner Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Partner Name:</strong> {{ $applyNow->partner_first_name }}
                                {{ $applyNow->partner_last_name }}</p>
                            <p><strong>Partner Phone:</strong> {{ $applyNow->partner_phone }}</p>
                            <p><strong>Partner SSN:</strong> {{ $applyNow->partner_ssn }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Partner Ownership Percentage:</strong>
                                {{ $applyNow->partner_ownership_percentage }}%</p>
                            <p><strong>Partner Address:</strong> {{ $applyNow->partner_address }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Business Property Information
                </div>
                <div class="card-body">
                    <p><strong>Landlord:</strong> {{ $applyNow->landlord }}</p>
                    <p><strong>Landlord Name:</strong> {{ $applyNow->landlord_name }}</p>
                    <p><strong>Landlord Phone:</strong> {{ $applyNow->landlord_phone }}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Signatures
                </div>
                <div class="card-body">
                    <p><strong>Owner Signature:</strong>
                        <img src="{{ asset('storage/' . $applyNow->owner_signature) }}" alt="Owner Signature"
                            width="150" class="signature-image">
                    </p>
                    <p><strong>Partner Signature:</strong>
                        @if ($applyNow->partner_signature)
                            <img src="{{ asset('storage/' . $applyNow->partner_signature) }}" alt="Partner Signature"
                                width="150" class="signature-image">
                        @else
                            No signature available
                        @endif
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Additional Files
                </div>
                <div class="card-body additional-files">
                    @if ($applyNow->uploaded_bank_statements)
                        <ul>
                            @foreach (json_decode($applyNow->uploaded_bank_statements) as $file)
                                <li><a href="{{ asset('storage/' . $file) }}" target="_blank">{{ basename($file) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No bank statements uploaded.</p>
                    @endif
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('apply.index') }}" class="btn btn-primary btn-details">Back to Applications</a>
            </div>

        </div>

        <!-- Bootstrap JS and dependencies (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-KJ3o2DKtIkvYIKXbN1sw2PuR2dM6doPU5pndy8ekubBErJKozVwzI1qzRPI1M/jP" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cYEnhwEVYquj5moTcihGGWbrdITpm94/5A7h0vF5a1aBchBJb72d6E0Wf46KN2Lk" crossorigin="anonymous">
        </script>
    </x-app-layout>
</body>

</html>
