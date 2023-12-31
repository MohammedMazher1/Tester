<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/addQuestion.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap.css')}}">
    <title>Tester</title>
</head>
<body>
    <header class="header" >
            <nav style="padding: 0 20px;">
              <div>
                <i class="fa-solid fa-circle-arrow-right"></i>
              </div>
              <div>
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
    </header>
      <!-- end header  -->
      <main>
        <div class="container">
        <div class="userMange">
            <a href="{{Route('programs.create')}}" class="createUser">اضافة مستحدم</a>
            <table class="table">
                <tr>
                    <th>اسم الرنامج</th>
                    <th>وصف البرنامج</th>
                    <th>المدرب</th>
                    <th>تحكم</th>
                </tr>
                @foreach ($programs as $program)
                <tr>
                    <td>{{$program['name']}}</td>
                    <td>{{$program['description']}}</td>
                    <td>{{$program->trainer->user['name']}}</td>
                    <td>
                        <form style="display: inline" action="{{Route('programs.edit',$program['id'])}}" method="GET"><button><i class="fa-regular fa-pen-to-square"></i></button></form>
                       {{-- <a href="users/{{$user['id']}}"></a> --}}
                       <span> | </span>
                       <form style="display: inline" action="{{Route('programs.destroy',$program['id'])}}" method="POST">@method('DELETE')@csrf<button><i class="fa-solid fa-trash-can"></i></button></form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
      </main>
</body>
</html>
