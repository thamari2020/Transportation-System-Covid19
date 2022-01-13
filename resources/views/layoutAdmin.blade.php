<!DOCTYPE html>
<html>

<head>
    <title>Transportation System for Essential Services(COVID-19)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

        <div class="container">

            <a class="navbar-brand" href="{{ route('admin.route') }}">Admin Panel</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    @guest

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('login') }}">Login</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('register') }}">Register</a>

                    </li>

                    @else
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('admin.addVehicleCreate') }}">Add vehicle</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('admin.viewVehicle') }}">View Vehicle</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('admin.viewBooking') }}">View Bookings</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('admin.addVacancy') }}">Add Vacancy</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('admin.viewVacancy') }}">View Vacancy</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>

                    </li>



                    @endguest

                </ul>

            </div>

        </div>

    </nav>



    @yield('content')



</body>

</html>