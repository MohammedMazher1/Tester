
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>نظام متابعة الموظفين</title>
    <!-- Icons -->

    <link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
     <link href="{{asset('/assets/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">

    <header class="navbar">
        <div class="container-flHuid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img  src="assets/img/logo.png" alt="" style="width: 100px;">
            </a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="#">الرئيسية</a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="#">المستخدمين</a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="#">الاعدادات</a>
                </li>
            </ul>
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

    <!-- Plugins and scripts required by all views -->
    <script src="js/libs/Chart.min.js"></script>

    <!-- CoreUI main scripts -->

    <script src="{{asset('assets/js/app.js')}}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <!-- <script src="js/views/main.js"></script>-->
    <script src="js/views/charts.js"></script>
    <!-- Grunt watch plugin -->
    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>

<footer class="footer">
    <span class="text-left">
        <a href="https://mohammedmazher1.github.io/aboutMe/">Mohammed</a> &copy; 2023.
    </span>

</footer>
</body>

</html>
