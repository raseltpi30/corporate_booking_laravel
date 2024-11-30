{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom Table Styling */
        .table th {
            background-color: #5e72e4;
            color: white;
            font-weight: bold;
        }

        .table td {
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fc;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f5f9;
            cursor: pointer;
        }

        .btn-details {
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 30px;
            background-color: #1c74d7;
            color: white;
            text-decoration: none;
        }

        .btn-details:hover {
            background-color: #155a8a;
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary">Business Application Form</h2>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-striped table-hover shadow rounded">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Company Name</th>
                        <th scope="col">Business Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Federal Tax ID</th>
                        <th scope="col">Date Started</th>
                        <th scope="col">Type of Entity</th>
                        <th scope="col">Type of Business</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Cell Phone</th>
                        <th scope="col">Date of Signature</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($applyNows as $apply)
                        <tr>
                            <td>{{ $apply->company_name }}</td>
                            <td>{{ $apply->business_phone }}</td>
                            <td>{{ $apply->email }}</td>
                            <td>{{ $apply->federal_tax_id }}</td>
                            <td>{{ $apply->date_started }}</td>
                            <td>{{ $apply->entity_type }}</td>
                            <td>{{ $apply->business_type }}</td>
                            <td>{{ $apply->owner_name }}</td>
                            <td>{{ $apply->cell_phone }}</td>
                            <td>{{ $apply->owner_signature_date }}</td>
                            <td>
                                <a href="{{ url('/apply-now/show/' . $apply->id) }}" class="btn-details">View
                                    Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-KJ3o2DKtIkvYIKXbN1sw2PuR2dM6doPU5pndy8ekubBErJKozVwzI1qzRPI1M/jP" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cYEnhwEVYquj5moTcihGGWbrdITpm94/5A7h0vF5a1aBchBJb72d6E0Wf46KN2Lk" crossorigin="anonymous">
    </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom Table Styling */
        .table th {
            background-color: #5e72e4;
            color: white;
            font-weight: bold;
        }

        .table td {
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fc;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f5f9;
            cursor: pointer;
        }

        .btn-details {
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 30px;
            background-color: #1c74d7;
            color: white;
            text-decoration: none;
        }

        .btn-details:hover {
            background-color: #155a8a;
            text-decoration: none;
        }

        /* Custom Styling for h2 */
        h2 {
            font-size: 2rem; /* Set font size */
            font-weight: bold; /* Make the text bold */
            color: #5e72e4; /* Customize the color if needed */
            text-align: center; /* Center-align the text */
            margin-bottom: 20px; /* Add some space below the header */
        }

        .admin-list-container {
            max-width: 1800px;
            margin-left: 20px !important;
            margin-right: 20px !important;
        }


        @media only screen and (min-width: 1025px) and (max-width: 1199px) {

            .admin-list-container {
                max-width: 1700px;
                margin-left: 10px !important;
                margin-right: 10px !important;
            }

        }

        @media (max-width: 768px) {
            .table th:nth-child(2),
            .table th:nth-child(3),
            .table th:nth-child(4),
            .table th:nth-child(5),
            .table td:nth-child(2),
            .table td:nth-child(3),
            .table td:nth-child(4),
            .table td:nth-child(5) {
                display: none;
            }
        }

    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-blue-800 leading-tight">
                {{ __('Business Application Form') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="admin-list-layout mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="admin-list-container mt-5 ">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover shadow rounded">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Business Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date Started</th>
                                        <th scope="col">Owner Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($applyNows as $apply)
                                        <tr>
                                            <td>{{ $apply->company_name }}</td>
                                            <td>{{ $apply->business_phone }}</td>
                                            <td>{{ $apply->email }}</td>
                                            <td>{{ $apply->date_started }}</td>
                                            <td>{{ $apply->owner_name }}</td>
                                            <td>
                                                <a href="{{ url('/apply-now/show/' . $apply->id) }}"
                                                    class="btn-details">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Bootstrap JS and dependencies (Optional) -->
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIKXbN1sw2PuR2dM6doPU5pndy8ekubBErJKozVwzI1qzRPI1M/jP" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                        integrity="sha384-cYEnhwEVYquj5moTcihGGWbrdITpm94/5A7h0vF5a1aBchBJb72d6E0Wf46KN2Lk" crossorigin="anonymous">
                    </script>

                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>


