@extends('layouts.admin')
@section('content')
<div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card" style="margin-top: 10%">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> قائمة المستخدمين
                </div>
                <div class="card-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>اسم المتدرب</th>
                                <th>الإيميل</th>
                                <th>الجنس</th>
                                <th>الاختبار القبلي</th>
                                <td>الاختبار البعدي</td>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0 ; $i < count($traineesDetails['traineesPre']) ; $i++)
                            <tr>
                                <td>{{$traineesDetails['traineesPre'][$i]['name'][0]->name}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['email'][0]->email}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['gender'][0]->gender}}</td>
                                <td>{{$traineesDetails['traineesPre'][$i]['totalTrueOptios']}}/{{$traineesDetails['traineesPre'][$i]['total']}}</td>
                                @if ($traineesDetails['traineesPost'][$i]['name'][0]->name == $traineesDetails['traineesPre'][$i]['name'][0]->name)
                                <td>{{$traineesDetails['traineesPost'][$i]['totalTrueOptios']}}/{{$traineesDetails['traineesPost'][$i]['total']}}</td>
                                @endif
                            </tr>
                            @endfor

                                {{-- <td>{{$user['name']}}</td>
                                <td>{{$user['phone']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['type']}}</td> --}}
                                {{-- <td>
                                    <form style="display: inline" style="padding-right: 10px;color: red;" action="{{Route('users.edit',$user['id'])}}" method="GET"><button class="dashbordButton"><i class="fa-regular fa-pen-to-square"></i></button></form>
                                    <span> | </span>
                                    <form style="display: inline" style="padding-left: 10px; color: rgb(23, 159, 238);" action="{{Route('users.destroy',$user['id'])}}" method="POST">@method('DELETE')@csrf<button class="dashbordButton" style="color: red"><i class="fa-solid fa-trash-can"></i></button></form>
                                </td> --}}

                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
                <a href="{{Route('users.create')}}" class="createUser" class="btn btn-sm btn-primary"><i class="fa fa-user-plus"></i> اضافه</a>
        </div>

    </div>
</div>
@endsection
