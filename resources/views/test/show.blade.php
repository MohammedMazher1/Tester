@extends('layouts/main')
@section('content')
<section class="showExam">
    <h2 class="examTitle">HTML</h2>
    @foreach ($exam->questions as $question)
    <div class="questionContainer">
        <div class="question">
            <h3 class="questionText">{{$question->question}}</h3>
            <ul class="options-list">
                @foreach ($question->options as $option)
                <li>
                    <label class="questionOptin" for="{{$question->id}}option">{{$option->option}}</label>
                    <input type="radio" id="{{$question->id}}option"  name="{{$question->id}}option" value="HTML">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach

    <button id="saveTest">ارسال</button>
</section>
@endsection

