
@extends('layouts/main')
@section('content')
            <section class="showExam">
                <h2 class="examTitle">HTML</h2>
                @foreach ($exam->questions as $question)
                <div class="questionContainer">
                    <div class="question">
                        <p class="pageNo">1 of 2</p>
                        <p>{{$question->question}}</p>
                    </div>
                    <div class="optionsContainer">
                        <p>Choose the correct option</p>
                        <div class="options">
                            <div>
                            @foreach ($question->options as $option)
                            <span>{{$option->option}}</span>
                            @endforeach
                             </div>


                        </div>
                    </div>
                </div>
                @endforeach

            </section>
@endsection

