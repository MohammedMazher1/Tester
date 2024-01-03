@extends('layouts/main')
@section('content')
<section class="showExam">
    <h2 class="examTitle">HTML</h2>
    {{-- <form action="{{Route('result')}}" method="POST"> --}}
        {{-- @csrf --}}
        <input type="hidden" id="exam_id" value="{{$exam->id}}">
    @foreach ($exam->questions as $question)
    <div class="questionContainer">
        <div class="question">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <h3 class="questionText">{{$question->question}}</h3>
            <ul class="options-list">
                @foreach ($question->options as $option)
                <li>
                    <label class="questionOptin" value="{{$option->id}}" for="{{$option->id}}option">{{$option->option}}</label>
                    <input type="radio" id="{{$option->id}}option"  name="{{$question->id}}option" >
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
    <button id="saveTest">ارسال</button>
{{-- </form> --}}

</section>
@endsection

