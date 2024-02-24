@extends('include.master')
@section('style-area')
    <style>
        body {
            background-image: none;
        }

        .main1 {
            margin-left: 120px;
            /* margin-right: 0%; */
            font-size: 19px;
        }

        .btn {
            background-color: #02345f;
        }

        .btn:hover {
            background-color: #E7EAEA !important;
        }
    </style>
    <style>
        div.myTable_filter label {
            float: right;
            margin-top: -21px;
            paading-left: 20%;
        }

        div.myTable_paging {
            margin-top: -16px;
            float: right;
            padding-left: 20%;
        }

        .dt-button {
            style=margin: 30px 0px 0px;
            background-color: #dc9727 !important;
            border-color: #dc9727 !important;
            color: white !important;
            background-color: #dc9727;
        }

        div.dt-container .dt-paging {
            float: right;
        }

        div.dt-container,
        div.dt-container .dt-search,
        div.dt-container div.dt-container .dt-processing,
        div.dt-container {
            float: right;
        }
    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
@endsection
@section('content-area')
    <div class="main1 mt-5">
        <!-- Main content starts -->
        {{-- <div class="container p-5"> --}}
        <div class="row">
            <div class="col-sm-12 p-0 mt-4">
                <div class="main-header">
                    <h4 class="text-dark fw-bold text-center h2">Block User Account</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="index.html" class="text-decoration-none">
                                <i class="fa-solid fa-house text-secondary"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item  "><a href="#" style="color:black ;"
                                class="text-decoration-none">Block Account</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
        {{-- </div> --}}
        <!--  -->
        <!--  3 -row start block -->
        <div class="row dashboard-header">
            <div class="col-md-12">
                <div class="row mt-3">
                    <div class="col-md-12 boder-danger me-5 pe-5">
                        <div class="row mb" style="margin-bottom: 30px;">
                            <form action="{{ route('filter-block-customer') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-1">
                                        <p class="text-dark"><b><strong>Filters:</strong></b></p>
                                    </div>
                                    <div class="col-sm-3 end-date">
                                        <p class="text-dark"><strong>Date From:</strong></p>
                                        <div class="input-group date d-flex" id="datepicker">
                                            <input type="text" class="form-control" name="startDate" id="txtDate"
                                                placeholder="dd-mm-yyyy" value="{{ $start ?? '' }}" />
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block ">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 end-date">
                                        <p><strong class="text-dark">Date to:</strong></p>
                                        <div class="input-group date d-flex" id="datepicker1">
                                            <input type="text" class="form-control" name="endDate" id="txtDate2"
                                                placeholder="dd-mm-yyyy" value="{{ $end ?? '' }}" />
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:40px;">
                                        <button class="btn bg-light shadow-lg " type="submit">Filter</button>
                                    </div>
                                    <div class="col-md-1 " style="margin-left:-12px;  margin-top:40px;">
                                        <a class="btn bg-light shadow-lg" href="{{ route('block-user') }}">Reset</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3 px-4">
                        <div class="col">
                            <table class="table responsive-table table-striped shadow-lg table-hover" id="myTable">
                                <thead>
                                    <tr class="" style="background-color:#E7EAEA;">
                                        <th scope="col" style="padding:1rem; font-size:1.2rem;">Sr.No.</th>
                                        <th scope="col " style="padding:1rem; font-size:1.2rem;">CIN NO.</th>
                                        <th scope="col " style="padding: 1em;rem; font-size:1.2rem;">Name</th>
                                        <th scope="col " style="padding:1rem; font-size:1rem;">Phone No.</th>
                                        <th scope="col" style="padding:1rem; font-size:1.2rem;">Profile Image</th>
                                        <th scope="col " style="padding:1rem; font-size:1.2rem;">Email Id</th>
                                        <th scope="col " style="padding:1rem; font-size:1.2rem;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($customers->isNotEmpty())
                                        @foreach ($customers as $customer)
                                            <tr data-customer-id="{{ $customer->id }}">
                                                <td style="padding:1rem;"><b> {{ $loop->iteration }}</b></td>
                                                <td>{{ $customer->cin_no }}</td>
                                                <td class="col-2" style="padding:1rem;">{{ $customer->name }}</td>
                                                <td style="padding:1rem;">{{ $customer->phone_no }}</td>
                                                <td style="padding:1rem;"><img
                                                        src="{{ asset('profile_images/' . $customer->profile_image) }}"
                                                        style="width: 100px;height:100px;" alt=""></td>
                                                <td class="col-2" style="padding:1rem;">{{ $customer->email_id }}</td>
                                                <td class="text-danger" style="padding:1rem;">Block</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h1>Found Not Data</h1>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script-area')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            $("#txtDate").datepicker({
                dateFormat: 'dd-mm-yy'
            });
            $("#txtDate2").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });
    </script>
@endsection
