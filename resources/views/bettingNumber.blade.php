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
@endsection
@section('content-area')
    <div class="main1 mt-5">
        <div class="row">
            <div class="col-sm-12 p-0 mt-4">
                <div class="main-header">
                    <h4 class="text-dark fw-bold text-center h2">Batting Number</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                            <a href="index.html" class="text-decoration-none">
                                <i class="fa-solid fa-house text-secondary"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item  "><a href="#" style="color:black ;"
                                class="text-decoration-none">Batting Number</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
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
                            <!--  -->
                            <div class="col-md-1 text-end" style="margin-left: 10px; margin-top:40px;">
                                <button class="btn bg-light shadow-lg " type="submit">Filter</button>
                            </div>
                            <div class="col-md-1 " style="margin-left: -12px;  margin-top:40px;">
                                <button class="btn bg-light shadow-lg " type="submit">Reset</button>
                            </div>
                            <!--  -->
                            <div class="col-sm-2" style="position: relative; top: 40px;">
                                <!-- Button trigger modal -->
                                <div class="Click-here" data-target="#mymodel" data-toggle="modal">
                                    <button class="btn bg-light shadow-lg" type="submit"
                                        style="padding: 4px 4px; font-size:17px;" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">+ Add Batting Number</button>
                                </div>
                                {{-- <button type="button" class="btn btn-primary">
                                    Launch demo modal
                                </button> --}}

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- poppup button
                                        <div class="modal" id="mymodel">
                                           <div class="modal-dialog">
                                              <div class="modal-content">
                                                 <div class="modal-header">
                                                    <h1>Select Your Location</h1>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                 </div>
                                                 <div class="modal-body">
                                                    <div class="Box d-flex justify-content-center align-items-center shadow-lg" id="form"> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3 row end -->
            <!-- buttons -->
            <div class="row pt-4">
                <div class="col-md-7 ">
                    <div class="row">
                        <div class="col-md-4  text-center d-flex multiple-btn">
                            <button class="btn bg-light   shadow-lg" type="submit" style="margin-left: 20px;">Copy</button>
                            <button class="btn bg-light   shadow-lg " type="submit" style="margin-left: 30px;">CSV</button>
                            <button class="btn bg-light   shadow-lg " type="submit"
                                style="margin-left: 30px;">Excel</button>
                            <button class="btn bg-light   shadow-lg " type="submit" style="margin-left: 30px;">PDF</button>
                            <button class="btn  bg-light   shadow-lg" type="submit"
                                style="margin-left: 30px;">Print</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <input class="form-control border-none me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-2" style="margin-left: -15px; margin-top: 1.5px;">
                    <button class="btn bg-light shadow-lg" type="submit">Search</button>
                </div>
            </div>
            <!-- buttons end -->
            <div class="container table-box  ">
                <table class="table table-striped shadow-lg table-hover " style="margin-top:3rem">
                    <thead>
                        <tr style="padding: 5rem; background-color:#E7EAEA;">
                            <th style="padding: 1.5rem; font-size:1.5rem;">Sr. No.</th>
                            <th style="padding: 1.5rem; font-size:1.5rem;">Credit Date</th>
                            <th style="padding: 1.5rem; font-size:1.5rem">Location</th>
                            <th style="padding: 1.5rem; font-size:1.5rem">Total No.</th>
                            <th style="padding: 1.5rem; font-size:1.5rem">Status</th>
                            <th style="padding: 1.5rem; font-size:1.5rem">Action</th>
                        </tr>
                        <tr>
                            <td style="padding: 1.5rem;">1</td>
                            <td style="padding: 1.5rem;">04/04/23</td>
                            <td style="padding: 1.5rem;">Faridabad</td>
                            <td style="padding: 1.5rem;">6</td>
                            <td class="text-success " style="padding: 1.5rem;">
                                <div class="select">
                                    <select name="format" id="format">
                                        <option value="pdf">Active</option>
                                        <option value="txt">Deactive</option>
                                    </select>
                            </td>
                            <td class="col" style="padding: 1.5rem;">
                                <div class=" d-flex">
                                    <div class="edit  me-2">
                                        <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2"
                                            data-toggle="modal"></i>
                                        <div id="simpleModal_2" class="modal">
                                            <div class="modal-window small">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <div class="container mt-2 p-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12  " id="form">
                                                            <h3 class="mt-2 ">Edit QR Code</h3>
                                                            <form action="" class="mt-3">
                                                                <div class="form-group ">
                                                                    <input type="text" name=" "
                                                                        class="form-control" placeholder="Series Name">
                                                                </div>
                                                                <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file"
                                                                        id="formFile">
                                                                </div>
                                                            </form>
                                                            <div class="buttton mt-3 ">
                                                                <button data-dismiss="modal">Update</button>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 1.5rem;">2</td>
                            <td style="padding: 1.5rem;">02/04/23</td>
                            <td style="padding: 1.5rem;">Aligarh</td>
                            <td style="padding: 1.5rem;">10</td>
                            <td class="text-success" style="padding: 1.5rem;">
                                <div class="select">
                                    <select name="format" id="format">

                                        <option value="pdf">Active</option>
                                        <option value="txt">Deactive</option>

                                    </select>
                            </td>
                            <td class="col" style="padding: 1.5rem;">
                                <div class=" d-flex ">
                                    <div class="edit  me-2">
                                        <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2"
                                            data-toggle="modal"></i>
                                        <div id="simpleModal_2" class="modal">
                                            <div class="modal-window small">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <div class="container mt-2 p-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12  " id="form">
                                                            <!-- <h3 class="mt-2 ">Edit QR Code</h3> -->
                                                            <form action="" class="mt-3">
                                                                <div class="form-group ">
                                                                    <input type="text" name=" "
                                                                        class="form-control" placeholder="Series Name">
                                                                </div>
                                                                <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file"
                                                                        id="formFile">
                                                                </div>
                                                            </form>
                                                            <div class="buttton mt-3 ">
                                                                <!-- <button data-dismiss="modal">Update</button> -->
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
                        </tr>
                        <tr>
                            <td style="padding: 1.5rem;">3</td>
                            <td style="padding: 1.5rem;">03/04/23</td>
                            <td style="padding: 1.5rem;">Noida</td>
                            <td style="padding: 1.5rem;">5</td>
                            <td class="text-success " style="padding: 1.5rem;">
                                <div class="select">
                                    <select name="format" id="format">

                                        <option value="pdf">Active</option>
                                        <option value="txt">Deactive</option>

                                    </select>
                            </td>
                            <td class="col" style="padding: 1.5rem;">
                                <div class=" d-flex">
                                    <div class="edit  me-2">
                                        <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2"
                                            data-toggle="modal"></i>
                                        <div id="simpleModal_2" class="modal">
                                            <div class="modal-window small">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <div class="container mt-2 p-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12  " id="form">
                                                            <h3 class="mt-2 ">Edit QR Code</h3>
                                                            <form action="" class="mt-3">
                                                                <div class="form-group ">
                                                                    <input type="text" name=" "
                                                                        class="form-control" placeholder="Series Name">
                                                                </div>
                                                                <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file"
                                                                        id="formFile">
                                                                </div>
                                                            </form>
                                                            <div class="buttton mt-3 ">
                                                                <button data-dismiss="modal">Update</button>
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
