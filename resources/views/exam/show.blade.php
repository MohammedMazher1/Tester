@extends('layouts.main')
@section('content')
<section class="showExam">
    <h2 class="examTitle" >programming language</h2>
        <div id="app">
        </div>
        <input type="hidden" id="exam_id" value="{{$exam->id}}">
        <input type="hidden" id="timer" value="{{$timer}}">
    @foreach ($exam->questions as $question)
     <!-- exam Start -->
     <div class="container-fluid py-5">
        <div class="container questions">
            <div class="question p-3  mb-4" dir="ltr">
                <h4 class="text-primary d-inline-block">{{$question->question}}</h4>
                <i class="fa-solid fa-question text-primary"></i>
                <ul class="options-list list-unstyled">
                    @foreach ($question->options as $option)
                    <li>
                        <input type="radio" id="q1-firstOption" name="q{{$question->id}}-Option">
                        <label for="q1-firstOption"><h6>{{$option->option}}</h6></label>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="container">
        <button id="submitTest" class="border-0 bg-primary px-4 py-2 text-white mx-auto d-block rounded">ارسال</button>
        </div>
      </div>
      <!-- exam End -->
        @endforeach
    <button id="saveTest">ارسال</button>
    <script>
        window.onload = function(){
            startTimer();
            }
    </script>
{{-- </form> --}}
</section>

@endsection

