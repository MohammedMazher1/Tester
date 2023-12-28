<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/addQuestion.css')}}">
    <title>Tester</title>
</head>
<body>
  <header class="header">
    <div class="container">
        <nav>
          <div>
            <i class="fa-solid fa-circle-arrow-right"></i>
          </div>
          <div>
            <h3>HTML</h3>
          </div>
          <div class="links">
            <div>
              <i class="fa fa-user"></i>
              <span>محمد مزهر</span>
            </div>
            <div>
              <span>تسجيل الخروج</span>
              <i class="fa-solid fa-right-from-bracket"></i>
            </div>
          </div>
        </nav>
    </div>
</header>
{{-- end header  --}}
@yield('content')
 <!-- start footer  -->
 <footer class="footer">
    <div class="related">
        <div>
            <h3>مواقع مُشابهة</h3>
            <p>https://www.jotform.com/test-maker/</p>
            <p>https://www.typeform.com/test-maker/</p>
            <p>https://www.flexiquiz.com/</p>
        </div>
        <div>
            <img src="assets/img/logo.png" alt="">
            <span class="circule"></span>
        </div>
    </div>
    <div class="icons">
        <div>
            <i class="fa-brands fa-github"></i>
            <p>MohammedMazher1</p>
        </div>
        <div>
            <i class="fa-brands fa-instagram"></i>
            <p>m.din6y</p>
        </div>
        <div>
            <i class="fa-brands fa-whatsapp"></i>
            <p>77653387</p>
        </div>
    </div>
    <div class="copy">
        Mohammed Mazher
        &copy;
    </div>
</footer>
<!-- end footer  -->
<script src="{{asset('/assets/lib/jquery-3.7.1.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>


</body>
</html>
