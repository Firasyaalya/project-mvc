@extends('layouts.app')
@section('main')

<div class="login" style="align-items:center; margin-top:70px">
    <h1 class="text-center mt-10 mb-5 py-5">Login</h1>
    <div class="mt-5 mx-auto" style=" height:500px; width:500px;">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" value = "{{ old('email') }}">
                        @error('email')
                        <span class="text-danger"> 
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" value = "{{ old('password') }}">
                        @error('password')
                        <span class="text-danger"> 
                            {{ $message }}
                        </span>
                        @enderror
                        <a href="{{ route('password.request') }}" class="btn btn-link">
                    Forgot your password?
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{ route('register') }}" class="btn btn-link">
                        Haven't have account yet? Register
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection