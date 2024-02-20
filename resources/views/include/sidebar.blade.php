<nav class="navbar navbar-expand-lg navbar-light order-md-0 order-sm-0 order-first"
    style="background-color: transparent; display:inline; z-index:9999;" id="dashboard-menu">
    <div class="container-fluid" style="justify-content: end; align-items: end; display: flex;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="sidenav">
                <div class="d-flex justify-content-start align-itms-center ms-5">
                    <img src="{{ asset('image/logo-2.png') }}" alt="img-fluid">
                </div>
                <ul class="mt-4">
                    <li class="text-decoration-none"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="text-decoration-none"><a href="{{route('betting-location')}}">Batting Location</a></li>
                    <li class="text-decoration-none"><a href="{{route('betting-number')}}">Batting Numbers</a></li>
                    <li class="text-decoration-none"><a href="{{route('all-user')}}">All User Profiles</a></li>
                    <li class="text-decoration-none"><a href="{{route('active-user')}}">Active Users Account</a></li>
                    <li class="text-decoration-none"><a href="{{route('block-user')}}">Block Account</a></li>
                    <li class="text-decoration-none"><a href="{{route('payment-user')}}">Payment History</a></li>
                    <li class="text-decoration-none"><a href="{{route('winning-user')}}">Winning User History</a></li>
                    <li class="text-decoration-none"><a href="{{route('withdraw-user')}}">User Withdraw History</a></li>
                    <li class="text-decoration-none"><a href="#">Settings</a></li>
                    <li class="text-decoration-none"><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
