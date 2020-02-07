@extends('master.login')

@section('content')
    <div class="main-container flex-container">
        <div class="left-container">
            <div class="form">
                <h1>Sign in</h1>
                <form action="{{ url('admin/login') }}" method="POST">
                    @csrf
                    <input type="text" id="email" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                    <div class="error-text">{{ $errors->first('email') }}</div>

                    <input type="password" id="password" name="password" placeholder="Password" autocomplete="on">
                    <div class="error-text">{{ $errors->first('password') }}</div>

                    @if($errors->has('errorMessage'))
                        <div class="error-text">{{ $errors->first('errorMessage') }}</div>
                    @endif

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <div class="right-container"></div>
    </div>
@endsection
