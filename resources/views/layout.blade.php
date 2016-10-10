<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700'/>
    <link rel="stylesheet" href='//fonts.googleapis.com/icon?family=Material+Icons'/>
    <link rel="stylesheet" href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
    <link rel="stylesheet" href='/css/bootstrap-material-design.min.css'/>
    <link rel="stylesheet" href='/css/ripples.min.css'/>
    <link rel="stylesheet" href='/css/styles.css'/>

    @yield('header')

</head>

<body>

<!--NavBar-->
<div class="navbar navbar-info1" style="background-color: #3e3f3a">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><b>Assignment 2</b></a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">About Us</a></li>

                @yield('navlink')

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control col-md-8" placeholder="Search">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    {{--<a href="#" data-target="dropdown-menu" class="dropdown-toggle" data-toggle="dropdown">User--}}
                        {{--<b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="javascript:void(0)">My Account</a></li>--}}
                        {{--<li><a href="javascript:void(0)">Update Password</a></li>--}}
                        {{--<li><a href="javascript:void(0)">History</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="javascript:void(0)">Sign Out</a></li>--}}
                    {{--</ul>--}}
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end NavBar -->

<div id="wrapper">
    <div class="container-fluid">

        @yield('content')

    </div><!--end container-fluid-->
</div><!--end wrapper-->

<!--FOOTER-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 text-center">
                <br/>
                <a href="#">About Us</a>
            </div>
            <div class="col-xs-4 text-center">
                <br/>
                <a href="#">Contact Us</a>
                <br/>
                <a href="#">FAQ</a>
            </div>
            <div class="col-xs-4 text-center">
                <br/>
                <a href="#">Terms</a>
                <br/>
                <a href="#">Disclaimer</a>
                <br/>
                <a href="#">Privacy</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
                <p class="text-center" style="color: #ffffff">Copyright &copy; 2016</p>
            </div>
        </div>
    </div>
</footer>
<!--END FOOTER-->


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='/js/material.min.js'></script>
<script src='/js/ripples.min.js'></script>
<script src='/js/scripts.js'></script>

@yield('script')
</body>
</html>