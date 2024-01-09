@extends('layouts.admin')
@section('content')
<div class="container-fluid py-5">
    <div class="container row row-cols-1 row-cols-md-4 mx-auto">
        @foreach ($exams as $exam)
        <div class="col shadow p-3 text-center">
            <i class="fa-solid fa-question"></i>
            <h4>{{$exam->name}}</h4>
            <span>20 question</span>
            <i class="fa-solid fa-star text-primary "></i>
            <i class="fa-solid fa-star text-primary"></i>
            <i class="fa-solid fa-star text-primary"></i>
            <i class="fa-solid fa-star text-primary"></i>
        </div>
        @endforeach

    </div>
 </div>
@endsection
