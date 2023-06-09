<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('images/library.png') }}" alt="library logo"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li class="{{ Request::is('dashboard*') ? 'current' : '' }}"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="{{ Request::is('authors*') ? 'current' : '' }}"><a href="{{ route('authors') }}">Authors</a></li>
                        <li class="{{ Request::is('publishers*') ? 'current' : '' }}"><a href="{{ route('publishers') }}">Publishers</a></li>
                        <li class="{{ Request::is('categories*') ? 'current' : '' }}"><a href="{{ route('categories') }}">Categories</a></li>
                        <li class="{{ Request::is('students*') ? 'current' : '' }}"><a href="{{ route('students') }}">Students</a></li>
                        <li class="{{ Request::is('books*') ? 'current' : '' }}"><a href="{{ route('books') }}">Books</a></li>
                        <li class="{{ Request::is('book_*') ? 'current' : '' }}"><a href="{{ route('book_issued') }}">Book Issued</a></li>
                        <li class="{{ Request::is('reports*') ? 'current' : '' }}"><a href="{{ route('reports') }}">Reports</a></li>
                        <li class="{{ Request::is('settings*') ? 'current' : '' }}"><a href="{{ route('settings') }}">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    @yield('content')

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
{{--                    <span><?php echo "&copy; Copyright ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?></span>--}}
                    <span>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
