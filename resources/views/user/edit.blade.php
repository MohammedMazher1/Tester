@extends('layouts.user')
@section('content')
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">تعديل البينات</h2>
                <form method="POST"  action="{{ route('users.update', $user['id']) }}">
                    @method('PUT')
                    @csrf
                    <div class="input-group">
                        <input class="input--style-2" type="text" required placeholder="الاسم" value="{{$user['name']}}" name="name">
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="tel" value="{{$user['phone']}}" required placeholder="رقم الجوال" name="phone">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="email" value="{{$user['email']}}" required placeholder="الايميل" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" value="{{$user['gender']}}" selected="selected">الجنس</option>
                                        @if ($user['gender'] == 'Male')
                                        <option selected>Male</option>
                                        <option>Female</option>
                                        @else
                                        <option>Male</option>
                                        <option selected>Female</option>
                                        @endif

                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">نوع المستخدم</option>
                                    @if ($user['type'] == 'trainer')
                                    <option selected>trainer</option>
                                    <option>trainee</option>
                                    @else
                                    <option>trainer</option>
                                    <option selected>trainee</option>
                                    @endif
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-t-30">
                        <button class="btn btn--radius btn--green" type="submit">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
