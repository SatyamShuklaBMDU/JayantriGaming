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
                    <div class="row pt-4">
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
                    </div>
                    <!-- table -->
                    <div class="row mt-3 px-4">
                        <div class="col">
                            <table class="table responsive-table  table-striped table-hover shadow-lg">
                                <thead>
                                   <tr class="" style="background-color:#E7EAEA;">
                                      <th scope="col" style="padding: 1.5rem; font-size:1.5rem ">Sr.No.</th>
                                      <th scope="col " style="padding: 1.5rem; font-size:1.5rem;">CIN NO.</th>
                                      <th scope="col " style="padding: 1.5rem; font-size:1.5rem;">Name</th>
                                      <th scope="col " style="padding:1.5rem; font-size:1.5rem">Phone No.</th>
              
                                      <th scope="col" style="padding: 1.5rem; font-size:1.5rem;">Profile Image</th>
                                      <th scope="col " style="padding: 1.5rem; font-size:1.5rem;">Email Id</th>
                                      <th scope="col " style="padding: 1.5rem; font-size:1.5rem;">Password</th>
                                      <th scope="col " style="padding: 1.5rem; font-size:1.5rem;">Status</th>
                                      <th scope="col" style="padding: 1.5rem; font-size:1.5rem;">Action</th>
              
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
              
                                      <td style="padding:1.5rem;"><b>1</b></td>
                                      <td style="padding:1.5rem;">176766</td>
              
                                      <td class="col-2" style="padding:1.5rem;">
                                         vipin kumar
              
                                      </td>
                                      <td style="padding:1.5rem;">9634375962</td>
                                      <td style="padding:1.5rem;">
                                         <img src="{{asset('image/user1.png')}}" alt="">
                                      </td>
                                      <td class="col-2" style="padding:1.5rem;">
                                         vipin@gmail.com
                                      </td>
              
              
                                      <td style="padding:1.5rem;">235gtrg4554</td>
                                      <td class="text-danger" style="padding:1.5rem;">Block</td>
              
              
                                      <td class="col" style="padding: 1.5rem;">
                                         <div class=" d-flex">
                                            <div class="edit  me-2">
                                               <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2" data-toggle="modal"></i>
                                               <div id="simpleModal_2" class="modal">
                                                  <div class="modal-window small">
                                                     <span class="close" data-dismiss="modal">&times;</span>
                                                     <div class="container mt-2 p-5">
                                                        <div class="row justify-content-center">
                                                           <div class="col-12  " id="form">
                                                              <h3 class="mt-2 ">Edit QR Code</h3>
                                                              <form action="" class="mt-3">
                                                                 <div class="form-group ">
                                                                    <input type="text" name=" " class="form-control" placeholder="Series Name">
                                                                 </div>
                                                                 <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file" id="formFile">
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
              
              
              
              
              
              
              
                                   <tr>
              
                                      <td style="padding:1.5rem;"><b>2</b></td>
                                      <td style="padding:1.5rem;">56877</td>
              
                                      <td class="col-2" style="padding:1.5rem;">
                                         Aryan kumar
              
                                      </td>
                                      <td style="padding:1.5rem;">9634365759</td>
                                      <td style="padding:1.5rem;">
                                         <img src="{{asset('image/user2.jpg')}}" alt="">
                                      </td>
                                      <td class="col-2" style="padding:1.5rem;">
                                         aryan@gmail.com
                                      </td>
              
              
                                      <td style="padding:1.5rem;">2343#@#t</td>
                                      <td class="text-danger" style="padding:1.5rem;">Block</td>
              
                                      <td class="col" style="padding: 1.5rem;">
                                         <div class=" d-flex">
                                            <div class="edit  me-2">
                                               <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2" data-toggle="modal"></i>
                                               <div id="simpleModal_2" class="modal">
                                                  <div class="modal-window small">
                                                     <span class="close" data-dismiss="modal">&times;</span>
                                                     <div class="container mt-2 p-5">
                                                        <div class="row justify-content-center">
                                                           <div class="col-12  " id="form">
                                                              <h3 class="mt-2 ">Edit QR Code</h3>
                                                              <form action="" class="mt-3">
                                                                 <div class="form-group ">
                                                                    <input type="text" name=" " class="form-control" placeholder="Series Name">
                                                                 </div>
                                                                 <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file" id="formFile">
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
                                   <tr>
              
                                      <td style="padding:1.5rem;"><b>3</b></td>
                                      <td style="padding:1.5rem;">577777</td>
              
                                      <td class="col-2" style="padding:1.5rem;">
                                         Sanjay kumar
              
                                      </td>
                                      <td style="padding:1.5rem;">588855343</td>
                                      <td style="padding:1.5rem;">
                                         <img src="{{asset('image/user2.jpg')}}" alt="">
                                      </td>
                                      <td class="col-2" style="padding:1.5rem;">
                                         sanjay@gmail.com
                                      </td>
              
              
                                      <td style="padding:1.5rem;">6575@@433t</td>
                                      <td class="text-danger" style="padding:1.5rem;">Block</td>
              
                                      <td class="col" style="padding: 1.5rem;">
                                         <div class=" d-flex">
                                            <div class="edit  me-2">
                                               <i class="fa-solid fa-pen-to-square" data-target="simpleModal_2" data-toggle="modal"></i>
                                               <div id="simpleModal_2" class="modal">
                                                  <div class="modal-window small">
                                                     <span class="close" data-dismiss="modal">&times;</span>
                                                     <div class="container mt-2 p-5">
                                                        <div class="row justify-content-center">
                                                           <div class="col-12  " id="form">
                                                              <h3 class="mt-2 ">Edit QR Code</h3>
                                                              <form action="" class="mt-3">
                                                                 <div class="form-group ">
                                                                    <input type="text" name=" " class="form-control" placeholder="Series Name">
                                                                 </div>
                                                                 <div class="mt-2 mb-2 ">
                                                                    <input class="form-control  mt-3" type="file" id="formFile">
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
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
