
      @extends('layouts.admin')
    @section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="margin-top: 10%">
                    <a href="{{Route('programs.create')}}" class="createUser btn btn-primary" ><i class="fa fa-user-plus"></i> اضافه</a>

                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> قائمة البرامج
                    </div>
                    <div class="card-block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>اسم البرنامج</th>
                                    <th>وصف البرنامج</th>
                                    <th>المدرب</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                <tr>
                                    <td>{{$program['name']}}</td>
                                    <td>{{$program['description']}}</td>
                                    <td>{{$program->trainer->user['name']}}</td>
                                    <td>
                                        <form style="display: inline" style="padding-right: 10px;color: red;" action="{{Route('programs.edit',$program['id'])}}" method="GET"><button class="dashbordButton"><i class="fa-regular fa-pen-to-square"></i></button></form>
                                        <span> | </span>
                                        <form style="display: inline" style="padding-left: 10px; color: rgb(23, 159, 238);" action="{{Route('programs.destroy',$program['id'])}}" method="POST">@method('DELETE')@csrf<button class="dashbordButton" style="color: red"><i class="fa-solid fa-trash-can"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection


