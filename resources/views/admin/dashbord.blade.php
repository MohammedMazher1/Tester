@extends('layouts.dashbord')
@section('content')
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>الصفحة الرئيسية</a>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-primary">
                        <div class="card-block-dash">
                            <div class="h1 text-xs-right m-b-2">
                                <i class="fa-solid fa-school"></i>
                                <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" > عدد المتدربين</div>
                            </div>
                            <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                            <button type="button" class="btn btn-primary" style="background-color:transparent; width: 100%;border-radius: 25px;border-width: 1px; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block-dash">
                            <div class="h1 text-xs-right m-b-2">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" >طلبات المدربين</div>
                            </div>
                            <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                            <button type="button" class="btn btn-info" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                        </div>
                    </div>
                </div>
                <!--/col-->
                    <div class="col-sm-6 col-lg-3">
                        {{-- <div>
                            <canvas id="myChart"></canvas>
                        </div> --}}
                        <div class="card card-inverse card-warning">
                            <div class="card-block-dash">
                                <div class="h1 text-xs-right m-b-2">
                                    <i class="fa-solid fa-brain"></i>
                                    <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                    <div class="font-weight-bold" style="text-align: right; margin-top: 3px; font-size: 15px;" >البرامج التعليمية</div>
                                </div>
                                <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                                <button type="button" class="btn btn-warning" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-primary">
                            <div class="card-block-dash">
                                <div class="h1 text-xs-right m-b-2">
                                    <i class="fa-solid fa-book"></i>
                                    <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                    <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" >الإختبارات الشهرية</div>
                                </div>
                                <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="25" max="100">25%</progress>
                                <button type="button" class="btn btn-primary" style="background-color:transparent; width: 100%;border-radius: 25px;border-width: 1px; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                            </div>
                        </div>
                    </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-inverse card-info">
                    <div class="card-block-dash">
                        <div class="h1 text-xs-right m-b-2">
                            <i class="fa-solid fa-book-atlas"></i>
                            <p style="float: right;margin-top: 5px ;font-size: 25px;">87.00</p>
                            <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" >المخيمات التدريبية</div>
                        </div>
                        <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                        <button type="button" class="btn btn-info" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                    </div>
                </div>
            </div>
            <!--/col-->
            <div class="col-sm-6 col-md-3">
                <div class="card card-inverse card-warning">
                    <div class="card-block-dash">
                        <div class="h1 text-xs-right m-b-2">
                            <i class="fa-solid fa-book-open"></i>
                            <p style="float: right;margin-top: 5px ;font-size: 25px;">150.00</p>
                            <div class="font-weight-bold" style="text-align: right; margin-top: 3px; font-size: 15px;" >الدورات</div>
                        </div>
                        <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                        <button type="button" class="btn btn-warning" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card col-md-12 col-sm-12" style="background-color: var(--white-color); padding:0">
                <div class="card-header">
                    <b><i class="fa-brands fa-laravel"></i> مخيم تطوير تطبيقات الويب </b>
                </div>
                <div class="container">
                    <table width="100%">
                        <tr>
                            <th width="60%">موسسة<br/><p class="text-muted">حضرموت تنمية بشرية</p></th>
                            <th>الدولة<br/><p class="text-muted">اليمن</p></th>
                        </tr>
                        <tr>
                            <th>المصمم<br/><p class="text-muted">محمد مزهر عمر بافرج</p></th>
                            <th>Computer Engineering <br/><p class="text-muted">2023</p></th>
                        </tr>
                        <tr>
                            <th>الموقع الالكتروني<br/><a href="https://mohammedmazher1.github.io/aboutMe/">Mohammed Mazhar</a></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}

</main>
@endsection
