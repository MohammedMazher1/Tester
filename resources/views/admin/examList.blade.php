@extends('layouts.admin')
@section('content')
    <div class="examlist">
        @foreach ($exams as $exam)
        <div class="">
            <i class="fa-solid fa-question"></i>
            <h4>{{$exam->name}}</h4>
            <span>question {{$exam->questions->count()}}</span>
            <i class="fa-solid fa-star text-primary "></i>
            <i class="fa-solid fa-star text-primary"></i>
            <i class="fa-solid fa-star text-primary"></i>
            <i class="fa-solid fa-star text-primary"></i>
        </div>
        @endforeach
    </div>
 @endsection

