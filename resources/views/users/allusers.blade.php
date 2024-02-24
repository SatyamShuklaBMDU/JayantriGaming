@extends('include.master')
@section('style-area')
    <style>
        body {
            background-image: none;
        }

        .main1 {
            margin-left: 120px;
            margin-right: 0%;
            font-size: 19px;
        }

        .btn {
            background-color: #02345f;
        }

        .btn:hover {
            background-color: #E7EAEA !important;
        }
    </style>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
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
        div.dt-container .dt-paging{
            float: right;
        }
        div.dt-container, div.dt-container .dt-search, div.dt-container div.dt-container .dt-processing, div.dt-container{
            float: right;
        }
    </style>
@endsection
@section('content-area')
    <div class="main1 mt-5">
        <!-- Main content starts -->
        {{-- <div class="container p-5"> --}}
        <div class="row">
            <div class="col-sm-12 p-0 mt-4">
                <div class="main-header">
                    <h4 class="text-dark fw-bold text-center h2">User Profile</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-decoration-none">
                                <i class="fa-solid fa-house text-secondary"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item  "><a href="#" style="color:black ;"
                                class="text-decoration-none">User Profile</a>
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
                            <div class="col-sm-1">
                                <p class="text-dark"><b><strong>Filters:</strong></b></p>
                            </div>
                            <div class="col-sm-3 end-date">
                                <p class="text-dark"><strong>Date From:</strong></p>
                                <div class="input-group date d-flex" id="datepicker">
                                    <input type="text" class="form-control " id="date" placeholder="dd-mm-yyyy" />
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
                                    <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <!--  -->
                            <!-- <div class="col-sm-3 end-date">
                            <p><strong class="text-dark">Add Location:</strong></p>
                           
                         </div> -->
                            <!--  -->
                            <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:40px;">
                                <button class="btn bg-light shadow-lg " type="submit">Filter</button>
                            </div>
                            <div class="col-md-1 " style="margin-left: -12px;  margin-top:40px;">
                                <button class="btn bg-light shadow-lg " type="submit">Reset</button>
                            </div>
                            <!--  -->

                        </div>
                    </div>
                    <!--  -->
                    <!-- 3 row end -->
                    <!-- buttons -->
                    {{-- <div class="row pt-4">
                        <div class="col-md-7 ">
                            <div class="row">
                                <div class="col-md-4  text-center d-flex multiple-btn">
                                    <button class="btn bg-light   shadow-lg" type="submit"
                                        style="margin-left: 20px;">Copy</button>
                                    <button class="btn bg-light   shadow-lg " type="submit"
                                        style="margin-left: 30px;">CSV</button>
                                    <button class="btn bg-light   shadow-lg " type="submit"
                                        style="margin-left: 30px;">Excel</button>
                                    <button class="btn bg-light   shadow-lg " type="submit"
                                        style="margin-left: 30px;">PDF</button>
                                    <button class="btn  bg-light   shadow-lg" type="submit"
                                        style="margin-left: 30px;">Print</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control border-none me-2" type="search" placeholder="Search"
                                aria-label="Search">
                        </div>
                        <div class="col-md-2" style="margin-left: -15px; margin-top: 1.5px;">
                            <button class="btn bg-light shadow-lg" type="submit">Search</button>
                        </div>
                    </div> --}}
                    <!-- table -->
                    <div class="row mt-3 px-2">
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
                                        {{-- <th scope="col " style="padding:1rem; font-size:1.2rem;">Password</th> --}}
                                        <th scope="col " style="padding:1rem; font-size:1.2rem;">Status</th>
                                        <th scope="col" style="padding:1rem; font-size:1.2rem;">Action</th>
                                        {{-- <th scope="col" style="padding:1rem; font-size:1.2rem;">Payment History</th>
                                        <th scope="col" style="padding:1rem; font-size:1.2rem;">Withdraw History</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($customers->isNotEmpty())
                                        @foreach ($customers as $customer)
                                            <tr data-customer-id="{{$customer->id}}">
                                                <td style="padding:1rem;"><b> {{ $customer->id }}</b></td>
                                                <td>{{ $customer->cin_no }}</td>
                                                <td class="col-2" style="padding:1rem;">{{ $customer->name }}</td>
                                                <td style="padding:1rem;">{{ $customer->phone_no }}</td>
                                                {{-- @dd($customer->profile_image) --}}
                                                <td style="padding:1rem;">
                                                    <img src="{{ asset('profile_images/' . $customer->profile_image) }}"
                                                        style="width: 100px;height:100px;" alt="">
                                                </td>
                                                <td class="col-2" style="padding:1rem;">
                                                    {{ $customer->email_id }}
                                                </td>
                                                {{-- <td style="padding:1rem;">235gtrg4554</td> --}}
                                                <td class="text-success" style="padding:1rem;">
                                                    <div class="select">
                                                        <select name="format" id="format">
                                                            <option value="active" {{$customer->status == 'active' ? 'selected' : ''}}>Active</option>
                                                            <option value="block" {{$customer->status == 'block' ? 'selected' : ''}}>Block</option>
                                                            <option value="pending" {{$customer->status == 'pending' ? 'selected' : ''}}>Pending</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="col" style="padding: 1rem;">
                                                    <div class=" d-flex">
                                                        <div class="edit  me-2">
                                                            <i class="fa-solid fa-pen-to-square"
                                                                data-target="simpleModal_2" data-toggle="modal"></i>
                                                            <div id="simpleModal_2" class="modal">
                                                                <div class="modal-window small">
                                                                    <span class="close"
                                                                        data-dismiss="modal">&times;</span>
                                                                    <div class="container mt-2 p-5">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-12  " id="form">
                                                                                <h3 class="mt-2 ">Edit QR Code</h3>
                                                                                <form action="" class="mt-3">
                                                                                    <div class="form-group ">
                                                                                        <input type="text"
                                                                                            name=" "
                                                                                            class="form-control"
                                                                                            placeholder="Series Name">
                                                                                    </div>
                                                                                    <div class="mt-2 mb-2 ">
                                                                                        <input class="form-control  mt-3"
                                                                                            type="file" id="formFile">
                                                                                    </div>
                                                                                </form>
                                                                                <div class="buttton mt-3 ">
                                                                                    <button
                                                                                        data-dismiss="modal">Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="delet">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- <td class="text-info" style="padding:1rem;">
                                                    {{ $customer->payment_history }}</td>
                                                <td class="text-success" style="padding:1rem;">
                                                    {{ $customer->withdraw_history }}</td> --}}
                                            </tr>
                                        @endforeach
                                    @else
                                        <h1>Found Not Data </h1>
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
<!-- Add this script to your blade template -->
<script>
    $(document).ready(function() {
        // Event listener for status change
        $('select[name="format"]').on('change', function() {
            var customerId = $(this).closest('tr').data('customer-id');
            var newStatus = $(this).val();
            $.ajax({
                url: '{{url('/update-user-status')}}',
                method: 'POST',
                data: {
                    userId: customerId,
                    newStatus: newStatus,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Status Changes Successfully')
                    console.log(response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection