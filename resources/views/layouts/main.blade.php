<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <title>Tester</title>
</head>
<body>
    <!-- start header  -->
    <header class="header">
        <div class="container">
            <nav>
                <div class="links">
                    <img class="logo" src="assets/img/logo.png" alt="logo">
                    <span id="headerLine"></span>
                    <span class="fas fa-bars toggle-menu"></span>
                    <ul>
                        <li>
                            <a href="#home" class="active">الرئسية</a>
                        </li>
                        <li>
                            <a href="#services">الخدمات</a>
                        </li>
                        <li>
                            <a href="#about-us">من نحن؟</a>
                        </li>
                        <li>
                            <a href="#footer">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="inputs">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" class="headerInput" placeholder="اكتب كلمة للبحث .....">
                    </div>
                    <div class="login ">
                        <a href="#" class="headerInput">
                            <span>إشتراك</span>
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                        <a href="#" class="headerInput">
                            <span>تسجيل الدخول</span>
                            <i class="fa-solid fa-registered"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
        <!-- end header  -->
        <!-- start main -->
        <main>
            @yield('content')
        </main>
        <!-- end main -->
        <!-- start footer  -->
        <footer class="footer" id="footer">
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
