@extends('include.master')
@section('style-area')
<style>
    .container {
  /* Add some padding for spacing */
  padding: 1rem;
}

.sidebar {
  float: left;
  width: 20%; /* Set sidebar width */
  padding: 1rem;
  background-color: #f0f0f0;
}

.content-area {
  padding: 1rem;
}

/* Clear the float after the sidebar */
.clear {
  clear: both;
}

</style>
@endsection
@section('content-area')
    <div class="container mt-5">
        <div class="row gy-4 gx-4" style="margin-right: 1.5rem;margin-left: 5.5rem;">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-location-dot border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:33px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Batting Location</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class=" fa-solid fa-list-ol border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Batting Numbers</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-user border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">All User Profiles</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-users border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Active Users Account</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-sharp fa-solid fa-ban border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Block Account</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-credit-card border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Payment History</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-medal border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">Winning User History</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-sack-dollar border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">User Withdraw History</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-10 mx-auto">
                <div class="card card_details">
                    <div class="card-body pb-0">
                        <span><i class="fa-solid fa-sharp fa-gear border rounded p-3 bg-light"
                                style="color: #d4ac1c; font-size:28px;"></i></span>
                        <h5 class="card-title text-dark mt-3 fw-bold mb-0">User Settings</h5>
                        <div class=" user-button d-flex justify-content-between align-items-center">
                            <p class="fs-3 fw-bold text-dark mb-0">46</p>
                            <p class="arro-b mb-0"> <a href="#"
                                    class="card-link text-decoration-none mb-1">Manage<span><i
                                            class="fa-solid fa-arrow-right mx-2 mt-1 "
                                            style="color: #d3ae27;"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
@endsection
