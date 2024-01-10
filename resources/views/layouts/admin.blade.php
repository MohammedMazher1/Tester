@php
    $loginedUser = Session()->get('user');
@endphp
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Lukasz Holeczek">
    <link rel="shortcut icon" href="{{asset('/assets/img/logo.png')}}">
    <title>إدارة النظام</title>
    <!-- Icons -->

    <link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}"> --}}
    <!-- Main styles for this application -->
    <link href="{{asset('/assets/css/dashbord.css')}}" rel="stylesheet">
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">

    <header class="navbar">
        <div class="container-flHuid d-flex justify-center">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img  src="{{asset('assets/img/whitelogo.png')}}" alt="logo">
            </a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{Route('admin')}}">
                        <i class="fa-solid fa-arrow-right margin-0 backToDashbord">
                        </i>
                    </a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{Route('index')}}">الرئيسية</a>
                </li>
            </ul>
            <div class="mx-3" style="display:flex; gap:5px ; color:#fff ; justify-content:flex-end; margin-left:50px; align-items:center; ">
                <i class="fa fa-user"></i>
                <span>{{$loginedUser->name}}</span>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <span class="text-left">
            <a href="https://mohammedmazher1.github.io/aboutMe/">Mohammed</a> &copy; 2023.
        </span>

    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{asset('/assets/lib/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('/assets/js/tether.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/pace.min.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>

    <!-- Plugins and scripts required by all views -->
    {{-- <script src="js/libs/Chart.min.js"></script> --}}

    <!-- CoreUI main scripts -->

    <script src="{{asset('assets/js/app.js')}}"></script>


</body>

</html>

<footer class="footer">
    <span class="text-left">
        <a href="https://mohammedmazher1.github.io/aboutMe/">Mohammed</a> &copy; 2023
    </span>

</footer>
</body>

</html>
