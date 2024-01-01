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
                        <div class="card-block">
                            <div class="h1 text-xs-right m-b-2">
                                <i class="fa-solid fa-school"></i>
                                <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" > عدد المتدربين</div>
                            </div>
                            <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="50" max="100">25%</progress>
                            <button type="button" class="btn btn-primary" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block">
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
                        <div class="card card-inverse card-warning">
                            <div class="card-block">
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
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <div class="h1 text-xs-right m-b-2">
                                    <i class="fa-solid fa-book"></i>
                                    <p style="float: right;margin-top: 5px ;font-size: 25px;">87.500</p>
                                    <div class="font-weight-bold" style="text-align: right;margin-top: 3px; font-size: 15px;" >الختبارات الشهرية</div>
                                </div>
                                <progress class="progress progress-xs progress-info m-t-1 m-b-0" value="25" max="100">25%</progress>
                                <button type="button" class="btn btn-danger" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 10%;margin-bottom: 0px;">المزيد</button>
                            </div>
                        </div>
                    </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="card">
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
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-danger">
                        <div class="card-block">
                            <div class="h1 text-muted text-xs-right m-b-2">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="h4 m-b-0">87.500</div>
                            <small class="text-muted text-uppercase font-weight-bold"><h6>المخيمات التدريبية</h6></small>
                            <progress class="progress progress-xs progress-danger m-t-1 m-b-0" value="10" max="100">25%</progress>
                            <button type="button" class="btn btn-danger" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 7%;margin-bottom: 0px;">المزيد</button>
                        </div>
                    </div>
                </div>

                <!--/col-->
                <div class="col-sm-6 col-md-3">
                    <div class="card card-primary">
                        <div class="card-block">
                            <div class="h1 text-muted text-xs-right m-b-2">
                                <i class="fa fa-clone"></i>
                            </div>
                            <div class="h4 m-b-0">87.500</div>
                            <small class="text-muted text-uppercase font-weight-bold"><h6>الدورات</h6></small>
                            <progress class="progress progress-xs progress-warning m-t-1 m-b-0" value="77" max="100">25%</progress>
                            <button type="button" class="btn btn-warning" style="width: 100%;border-radius: 25px;border-width: 1px;border-color: white; margin-top: 7%;margin-bottom: 0px;">المزيد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
