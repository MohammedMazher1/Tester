@extends('layouts.main')
@section('content')
<!-- exam Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 text-center text-primary justify-content-center align-item-center gap-3 mt-5 " style="cursor: pointer;">
            <div class="col shadow p-5 newExam newExam1" onclick="document.getElementById('examForm').submit();">
                <p>إنشاء اختبار جديد</p>
                <i class="fa-regular fa-file" style="font-size: 50px;"></i>
            </div>
                <div class="col shadow p-5 newExam newExam2" >
                    <p>اختبار موجود مسبقاً</p>
                    <i class="fa-solid fa-book-open " style="font-size: 50px;"></i>
                </div>
            <form action="{{Route('exams.create')}}" method="GET" id="examForm">
            </form>
        </div>
    </div>
  </div>
  <!-- exam End -->
@endsection
