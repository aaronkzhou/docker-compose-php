<!DOCTYPE html>
<html ng-app='languageexchange'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Language Exchange</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    
    <style>

        body {
            font-family: 'Monaco';
        }

        .fa-btn {
            margin-right: '6px';
        }
        .navbar-default{
            background: #FF8C69;
            border-color: #FF8C69;
        }
        .navbar-default .navbar-brand {
            color:#FFFFFF;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                    Language exchange
            </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" style="color:white">Login</a></li>
                        <li><a href="{{ url('/register') }}" style="color:white">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color:white;background: #FFAEB9;border-color: #FFAEB9">
                             {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu" >
                                <li><a href="{{ url('/requirements') }}" style="color: #FF8C69"><span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:#FF8C69"></span>Setup Your requirement</a></li>
                                <li><a href="{{ url('/logout') }}" style="color: #FF8C69"><i class="fa fa-btn fa-sign-out" style="color: #FF8C69"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@yield('content')
</body>
</html>