@extends('include.master')
@section('style-area')
    <style>
        body {
            background-image: none;
        }

        .content-wrapper {
            height: 100vh;
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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
@endsection
@section('content-area')
    <div class="main1 mt-5">
        <div class="row">
            <div class="col-sm-12 p-0 mt-4">
                <div class="main-header">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h4 class="text-dark fw-bold text-center h2">Batting Location</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="index.html" class="text-decoration-none">
                                <i class="fa-solid fa-house text-secondary"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item  "><a href="#" style="color:black ;"
                                class="text-decoration-none">Batting Location</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!--  -->
        <!--  3 -row start block -->
        <div class="row dashboard-header">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row mt-3">
                    <div class="col-md-12 boder-danger me-5 pe-5">
                        <div class="row mb" style="margin-bottom: 30px;">
                            <form action="{{ route('filter-batting-location') }}" method="post">
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
                                        <a class="btn bg-light shadow-lg" href="{{ route('betting-location') }}">Reset</a>
                                    </div>
                            </form>
                            <!--  -->
                            <div class="col-sm-2" style="position:relative;top:40px;">
                                <!-- Button trigger modal -->
                                <div class="Click-here" data-target="#mymodel" data-toggle="modal">
                                    <button class="btn bg-light shadow-lg" type="button"
                                        style="padding: 4px 4px; font-size:17px;" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">+ Add New Location</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" id="store-modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('betting-location-store') }}" id="storeform"
                                                method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <label for="txtdate3" class="form-lable">Credit Date</label>
                                                    <input type="text" name="credit_date" id="txtdate3"
                                                        class="form-control" placeholder="dd-mm-yyyy">
                                                    <label for="location" class="form-lable">Location</label>
                                                    <input type="text" name="betting_location" id="location"
                                                        class="form-control">
                                                    <label for="number" class="form-lable">Total No.</label>
                                                    <input type="number" name="total_number" id="number"
                                                        class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary save-changes-btn"
                                                        id="save-changes-btn">Save
                                                        changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <table class="table table-striped shadow-lg table-hover" id="myTable"
                                style="margin-top:1rem">
                                <thead>
                                    <tr style="padding: 5rem; background-color:#E7EAEA;">
                                        <th style="padding: 1.5rem; font-size:1.5rem;">Sr. No.</th>
                                        <th style="padding: 1.5rem; font-size:1.5rem;">Credit Date</th>
                                        <th style="padding: 1.5rem; font-size:1.5rem">Location</th>
                                        <th style="padding: 1.5rem; font-size:1.5rem">Total No.</th>
                                        <th style="padding: 1.5rem; font-size:1.5rem">Status</th>
                                        <th style="padding: 1.5rem; font-size:1.5rem">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $location)
                                        <tr data-location-id="{{ $location->id }}">
                                            <td style="padding: 1.5rem;">{{ $loop->iteration }}</td>
                                            <td style="padding: 1.5rem;">
                                                {{ Carbon\Carbon::parse($location->credit_date)->format('d/m/Y') }}</td>
                                            <td style="padding: 1.5rem;">{{ $location->betting_location }}</td>
                                            <td style="padding: 1.5rem;">{{ $location->total_number }}</td>
                                            <td class="text-success" style="padding: 1.5rem;">
                                                <div class="select">
                                                    <select name="format" class="format">
                                                        <option value="" selected disabled>Select Status</option>
                                                        <option value="0"
                                                            {{ $location->status == 0 ? 'selected' : '' }}>Deactivate
                                                        </option>
                                                        <option value="1"
                                                            {{ $location->status == 1 ? 'selected' : '' }}>Activate
                                                        </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="col" style="padding: 1.5rem;">
                                                <div class="d-flex">
                                                    <div class="edit me-2">
                                                        <i class="fa-solid fa-pen-to-square edit-location"
                                                            data-location-id="{{ $location->id }}"></i>
                                                        <div class="modal fade" id="editModal" tabindex="-1"
                                                            aria-labelledby="editModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editModalLabel">
                                                                            Edit Betting Location</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form id="editLocationForm" action=""
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <label for="edit_credit_date"
                                                                                    class="form-label">CreditDate</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="edit_credit_date"
                                                                                    name="credit_date" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="edit_betting_location"
                                                                                    class="form-label">Betting
                                                                                    Location</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="edit_betting_location"
                                                                                    name="betting_location" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="edit_total_number"
                                                                                    class="form-label">Total
                                                                                    Number</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="edit_total_number"
                                                                                    name="total_number" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="delet">
                                                        <a href="#" class="delete-location"
                                                            data-location-id="{{ $location->id }}"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <script>
        $(document).ready(function() {
            $('.delete-location').click(function(event) {
                event.preventDefault();
                var locationId = $(this).data('location-id');
                if (confirm('Are you sure you want to delete this location?')) {
                    $.ajax({
                        url: '/delete-betting-location/' + locationId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            alert('Location deleted successfully');
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            alert('Error deleting location:', error);
                        }
                    });
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
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
            $("#txtdate3").datepicker({
                dateFormat: 'dd-mm-yy'
            });
            $("#edit_credit_date").datepicker({
                dateFormat: 'dd-mm-yy'
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.format').change(function() {
                var selectedValue = $(this).val();
                var bettingLocationId = $(this).closest('tr').data('location-id');
                $.ajax({
                    url: '{{ url('/update-betting-location-status') }}',
                    type: 'POST',
                    data: {
                        bettingLocationId: bettingLocationId,
                        status: selectedValue,
                    },
                    success: function(response) {
                        alert('Status updated successfully');
                        console.log("Status updated successfully:", response);
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error updating status:", textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.edit-location').click(function() {
                var locationId = $(this).data('location-id');
                $.ajax({
                    url: '/betting-locations/' + locationId + '/edit',
                    type: 'GET',
                    success: function(response) {
                        var datetimeString = response.credit_date;
                        var dateParts = datetimeString.split(' ')[0];
                        var [year, month, day] = dateParts.split('-');
                        var formattedDate = day + '-' + month + '-' + year;
                        $('#edit_credit_date').val(formattedDate);
                        $('#edit_betting_location').val(response.betting_location);
                        $('#edit_total_number').val(response.total_number);
                        $('#editLocationForm').attr('action', '/betting-locations/' +
                            locationId);
                        $('#editModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
