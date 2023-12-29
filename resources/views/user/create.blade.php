<!DOCTYPE html>
<html lang="Ar" dir="rtl">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="tester">
    <!-- Title Page-->
    <title>admin</title>

    <!-- Icons font CSS-->
    <!-- Vendor CSS-->
    <link href="{{asset('/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <link href="{{asset('/assets/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('/assets/css/admin.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">ادخال البينات</h2>
                    <form method="POST"  action="{{asset('/users')}}">
                        {{-- @method('post') --}}
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" required placeholder="الاسم" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="tel" required placeholder="رقم الجوال" name="phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="email" required placeholder="الايميل" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">الجنس</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="type">
                                        <option disabled="disabled" selected="selected">نوع المستخدم</option>
                                        <option>trainer</option>
                                        <option>trainee</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Class</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Registration Code" name="res_code">
                                </div>
                            </div>
                        </div> --}}
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('/assets/lib/jquery-3.7.1.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('/assets/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
