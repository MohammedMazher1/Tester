@extends('layouts.main')

@section('content')

<section class="login">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="LoginCard">
            <p>اسم المستخدم</p>
            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <i class="fa fa-user"></i>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <p>كلمة المرور</p>
            <div>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <i class="fa fa-lock"></i>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('تسجيل الدخول') }}
            </button>
        </div>
    </form>
</section>
@endsection
