@extends('layout')
@section('content')

@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif

<main class="login-form">
<div class="cotainer">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="">
            <div class="">Login</div>
            <div class="">
                <form action="{{ route('login.post') }}" method="POST" class="st-1">
                    @csrf
                            <label for="email_address" class="">E-Mail Address</label>
                            <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <label for="password" class="">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                              

                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</main>
@endsection