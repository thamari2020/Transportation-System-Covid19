<!DOCTYPE html>
<html>

<head>
    <title>Transportation System for Essential Services(COVID-19)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script
        src="https://www.paypal.com/sdk/js?client-id=ARjfaQ2wEVcfs-KhR9ztlyV2oOjBsttZBzzRlUO4UbbMjOTsuMX64JwNrZU-m5Uzw6hXmb2QsTPwY2jz"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
        </script>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

        <div class="container">

            <a class="navbar-brand" href="#">Transportation System for Essential Services(COVID-19)</a>

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

                        <a class="nav-link" href="{{ route('/') }}">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('viewVacancy') }}">Vacancy</a>

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



    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>