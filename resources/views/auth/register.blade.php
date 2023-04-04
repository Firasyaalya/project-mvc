@extends('layouts.app')
@section('main')
<div class="login" style="align-items:center; margin-top:100px">
    <h1 class="text-center mt-10 mb-5 py-5">Register</h1>
<div class="mt-5 mx-auto" style="width: 400px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value = "{{old('name')}}">
                    @error('name')
                    <span class="text-danger"> 
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input name="email" type="email" class="form-control" value = "{{old('email')}}">
                    @error('email')
                    <span class="text-danger"> 
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value = "{{old('password')}}">
                    @error('password')
                    <span class="text-danger"> 
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection