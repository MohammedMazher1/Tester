@extends('layouts.main')
@section('content')
  <!-- exam Start -->
  <div class="container-fluid py-5">
    <div id="error" class="danger"></div>
    <div class="container questions">
        <div>
            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
            <input type="hidden" name="exam_id" id="exam_id" value="{{$exam->id}}">
            <input type="text" class="form-control w-50 mx-auto px-5" id="exam_name" required placeholder="اسم الاختبار" value="{{$exam->name}}">
            <div class="row row-cols-1 row-cols-md-3 justify-content-around  gap-3">
                <div class="form-group  row row-cols-1 gap-3 text-right rounded  text-white  p-2 position-relative mt-4 bg-primary">
                    <span >الاختبار القبلي</span>
                    <input type="date" value="{{$exam->date_of_preTest}}" class="form-control" name="date_of_preTest" id="date_of_preTest" required placeholder="التاريخ">
                    <input type="time" value="{{$exam->time_of_preTest}}" class="form-control" name="time_of_preTest" id="time_of_preTest" required placeholder="الوقت">
                </div>
                <div class="form-group row row-cols-1 gap-3 rounded text-white text-right p-2 position-relative mt-4 bg-primary">
                    <span class="text"> الاختبار البعدي</span>
                    <input type="date" value="{{$exam->date_of_postTest}}" class="form-control" name="date_of_postTest" id="date_of_postTest" required placeholder="التاريخ">
                    <input type="time" value="{{$exam->date_of_postTest}}" class="form-control" name="time_of_postTest" id="time_of_postTest" required placeholder="الوقت">
                </div>
            </div>
        </div>
        @foreach ($exam->questions as $question)
        <div class="question p-3 bg-primary mb-4" dir="ltr">
            <input type="text" class="questionInput form-control mb-2 w-50" required placeholder="اكتب سوالك هنا ..." name="q" value="{{$question->question}}">
            <ul class="options-list list-unstyled">
                @foreach ($question->options as $option)
                <li>
                    @if ($option->status == 1)
                    <input type="radio" name="q{{$question->id}}-Option" value="HTML" checked>
                    @else
                    <input type="radio" name="q{{$question->id}}-Option" value="HTML" >
                    @endif
                    <label for="q1-firstOption">
                        <input type="text" value="{{$option->option}}" name="q{{$question->id}}-Option" class="form-control optionInput" placeholder="OPTION" required>
                    </label>
                    <i class="fa-solid fa-xmark"></i>
                  </li>
                @endforeach
            </ul>
            <div class="addOptionBtn text-white border">
              <span>اضافة خيار</span>
              <i class="fa fa-plus"></i>
            </div>
            <div class="icons">
              <i class="fa fa-trash"></i>
            </div>
        </div>
        @endforeach

    </div>
    <div class="container">
      <button class="bg-primary text-white border-0 px-2 py-2 rounded " id="addQuestion">
      <span>اضافة سوال</span>
      <i class="fa-solid fa-square-plus"></i>
    </button>
    <button id="editExam" class="border-0 bg-primary px-4 py-2 text-white mx-auto d-block rounded">ارسال</button>
    </div>
  </div>
  <!-- exam End -->
@endsection
