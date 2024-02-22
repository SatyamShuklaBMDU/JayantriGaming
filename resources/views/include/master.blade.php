<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jayantri Gaming</title>
    @include('include.head')
    @yield('style-area')
    <style>
        .container {
            display: flex;
        }

        .sidebar {
            width: 8%;
            /* Adjust sidebar width as needed */
            padding: 1rem;
            background-color: #f0f0f0;
        }

        .content-area {
            flex: 1;
            /* Expand content area to fill remaining space */
            padding: 1rem;
        }

        /* Specific styles for elements */
        .logo {
            width: 100%;
            max-width: 200px;
            /* Adjust logo size */
            margin-bottom: 1rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav li {
            margin-bottom: 1rem;
        }

        nav a {
            text-decoration: none;
            color: #333;
        }

        .content-area {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            /* Adjust card width and layout */
            gap: 1rem;
        }

        .card-section {
            margin-bottom: 1rem;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            @include('include.header')
        </div>
        <div class="sidebar">
            @include('include.sidebar')
        </div>
        <section>
            @yield('content-area')
        </section>
        @yield('script-area')
    </div>
</body>
</html>
