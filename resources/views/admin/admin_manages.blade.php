@extends('include.master')
@section('style-area')
    <style>
        body {
            background-image: none;
        }

        .content-wrapper {
            height: 100vh;
            width: 80vw;
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
            color: #02345f;
        }

        .Modules {
            flex-wrap: wrap;
        }

        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
    </style>
@endsection
@section('content-area')
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="main1 mt-5">
            <div class="row">
                <div class="col-sm-12 p-0 mt-4">
                    <div class="main-header">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <h4 class="text-dark fw-bold text-center h2">Admin Manages</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html" class="text-decoration-none">
                                    <i class="fa-solid fa-house text-secondary"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item  "><a href="#" style="color:black ;"
                                    class="text-decoration-none">Admin Manages</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row dashboard-header p-3" style="background: #e5e5e5;">
                <div class="col-md-12 mx-auto">
                    <form class="notification-form shadow rounded p-2" action="{{ route('admin-manages') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="exampleInputsubject" aria-describedby="textHelp" placeholder="Please Enter Your Name">
                            @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                id="exampleInputsubject" aria-describedby="textHelp" placeholder="Please Enter Your Email">
                            @if ($errors->has('email'))
                                <script type="text/javascript">
                                    alert(`{{ $errors->first('email') }}`)
                                </script>
                            @endif
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Create Password</label>
                            <input type="password" name="password" class="form-control" id="password-field"
                                aria-describedby="textHelp" placeholder="*****">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <input type="text" name="role" class="form-control" id="exampleInputsubject"
                                aria-describedby="textHelp" placeholder="Role">
                            @if ($errors->has('role'))
                                <span class="help-block">{{ $errors->first('role') }}</span>
                            @endif
                        </div>
                        <h6>Assign Modules</h6>
                        <div class="col-md-12  Modules d-flex justify-content-around">
                            <div class="form-check" style="">
                                <input class="form-check-input" type="checkbox" value="all" id="alluser"
                                    name="permission[]" checked>
                                <label class="form-check-label" for="alluser">
                                    All
                                </label>
                            </div>
                            <div class="form-check" style="">
                                <input class="form-check-input" type="checkbox" value="betting_location"
                                    id="betting_location" name="permission[]">
                                <label class="form-check-label" for="betting_location">
                                    Betting Location
                                </label>
                            </div>
                            <div class="form-check" style="">
                                <input class="form-check-input" type="checkbox" value="betting_number" id="betting_number"
                                    name="permission[]">
                                <label class="form-check-label" for="betting_number">
                                    Betting Number
                                </label>
                            </div>
                            <!-- <div class="col-md-4"> -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="allusers" id="allusers"
                                    name="permission[]">
                                <label class="form-check-label" for="allusers">
                                    All User's Profile
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-around ">
                            <div class="form-check ">
                                <input class="form-check-input " type="checkbox" value="activeusers" id="activeusers"
                                    name="permission[]">
                                <label class="form-check-label" for="corporatebatch">
                                    Active User Account
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="blockuser" id="blockuser"
                                    name="permission[]">
                                <label class="form-check-label" for="blockuser">
                                    Block User Account
                                </label>
                            </div>
                            <!-- <div class="col-md-4"> -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="paymenthistory"
                                    id="paymenthistory" name="permission[]">
                                <label class="form-check-label" for="paymenthistory">
                                    Payment History
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="winninghistory"
                                    id="winninghistory" name="permission[]">
                                <label class="form-check-label" for="winninghistory">
                                    Winning History
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-around">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="withdrawhistory"
                                    id="withdrawhistory" name="permission[]">
                                <label class="form-check-label" for="withdrawhistory">
                                    Withdraw History
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="adminmanages" id="adminmanages"
                                    name="permission[]">
                                <label class="form-check-label" for="adminmanages">
                                    Admin Manages
                                </label>
                            </div>
                            <!-- <div class="col-md-4"> -->
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="feedback" id="feedback"
                                    name="permission[]">
                                <label class="form-check-label" for="feedback">
                                    Feedback
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="complaints" id="complaints"
                                    name="permission[]">
                                <label class="form-check-label" for="complaints">
                                    Complaints
                                </label>
                            </div> --}}
                        </div>
                        <button type="submit" class="btn btn-dark btn-md float-end" style="margin: 30px 0px 0px;">Assign
                            Roles</button>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>Users and Permissions</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->permissions }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $user->id }}">Edit</button>
                                    </td>
                                </tr>
                                <!-- Modal for editing permissions -->
                                <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Edit
                                                    Permissions for {{ $user->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form id="editPermissionsForm{{ $user->id }}"
                                                action="{{ route('update.permissions', $user->id) }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <!-- Add your form for editing permissions here -->
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" value="{{ $user->name }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" value="{{ $user->email }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <input type="text" class="form-control" id="role"
                                                            name="role" value="{{ $user->role }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="permissions">Permissions</label><br>
                                                        <!-- Checkboxes for permissions -->
                                                        <div class="col-md-12  Modules d-flex justify-content-around">
                                                            <div class="form-check" style="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="all" id="alluser" name="permission[]"
                                                                    checked>
                                                                <label class="form-check-label" for="alluser">
                                                                    All
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="betting_location" id="betting_location"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="betting_location">
                                                                    Betting Location
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="betting_number" id="betting_number"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="betting_number">
                                                                    Betting Number
                                                                </label>
                                                            </div>
                                                            <!-- <div class="col-md-4"> -->
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="allusers" id="allusers" name="permission[]">
                                                                <label class="form-check-label" for="allusers">
                                                                    All User's Profile
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-around ">
                                                            <div class="form-check ">
                                                                <input class="form-check-input " type="checkbox"
                                                                    value="activeusers" id="activeusers"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="corporatebatch">
                                                                    Active User Account
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="blockuser" id="blockuser" name="permission[]">
                                                                <label class="form-check-label" for="blockuser">
                                                                    Block User Account
                                                                </label>
                                                            </div>
                                                            <!-- <div class="col-md-4"> -->
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="paymenthistory" id="paymenthistory"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="paymenthistory">
                                                                    Payment History
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="winninghistory" id="winninghistory"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="winninghistory">
                                                                    Winning History
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-around">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="withdrawhistory" id="withdrawhistory"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="withdrawhistory">
                                                                    Withdraw History
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="adminmanages" id="adminmanages"
                                                                    name="permission[]">
                                                                <label class="form-check-label" for="adminmanages">
                                                                    Admin Manages
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-area')
    <script>
        $('#editModal{{ $user->id }}').on('show.bs.modal', function(event) {
            var userId = {{ $user->id }};
            fetchUserPermissions(userId);
        });
    </script>
    <script>
        function fetchUserPermissions(userId) {
            $.ajax({
                url: '/fetch-user-permissions/' + userId,
                type: 'GET',
                success: function(response) {
                    response.permissions.forEach(function(permission) {
                        $('#' + permission).prop('checked', true);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".toggle-password").click(function() {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
            if ($("#alluser").is(":checked")) {
                $("input[type=checkbox]").prop('checked', true);
            }
            $("#alluser").click(function() {
                $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
            });
        });
    </script>
@endsection
