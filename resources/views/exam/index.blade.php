@extends('layouts.main')

@section('content')
<div>
    <div class="row">

        <div class="col-lg-12 small" style="text-align: start">
            <div class="card" style="margin-top: 5%">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>  اختباراتي
                </div>
                <div class="card-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>اسم الاختبار</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>عدد الاسئلة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exams as $exam)
                            <tr>
                                <td>{{$exam['name']}}</td>
                                <td>{{$exam['created_at']}}</td>
                                <td>{{$exam['updated_at']}}</td>
                                <td>{{$exam->questions->count()}}</td>
                                <td>
                                    <form style="display: inline" style="padding-right: 10px;color: red;" action="{{Route('exams.edit',$exam['id'])}}" method="GET"><button class="dashbordButton border-0" style="outline:none;color:blue;font-size: 18px;
                                        background: transparent;"><i class="fa-regular fa-pen-to-square"></i></button></form>
                                    <span> | </span>
                                    <form style="display: inline" style="padding-left: 10px; color: rgb(23, 159, 238);" action="{{Route('exams.destroy',$exam['id'])}}" method="POST">@method('DELETE')@csrf<button class="dashbordButton border-0" style="outline:none;color: red; font-size: 18px;
                                        background: transparent;"><i class="fa-solid fa-trash-can"></i></button></form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div >
        </div>

    </div>
</div>
@endsection
