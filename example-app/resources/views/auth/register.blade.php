@extends('layouts.main')

@section("content")
<h1 class="title"> Create a new account</h1>

<form action="{{route('register')}}" method="post" class="max-w-screen-md mx-auto">
@csrf

    <div class="mb-4">
        <input type="text" name="username" id="" class="input @error('username') ring-red-500 @enderror" placeholder="Username" value="{{old('username')}}">
        @error('username')
            <p class="error">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-4">
        <input type="text" name="email" id="" class="input  @error('email') ring-red-500 @enderror" placeholder="Email" value="{{old('email')}}">
        @error('email')
        <p class="error">{{$message}}</p>
    @enderror
    </div>
    <div class="mb-4">
        <input type="password" name="password" id="" class="input  @error('password') ring-red-500 @enderror" placeholder="Password" >
        @error('password')
        <p class="error">{{$message}}</p>
    @enderror
    </div>
    <div class="mb-4">
        <input type="password" name="password_confirmation" id="" class="input  @error('password') ring-red-500 @enderror" placeholder="Confirm Password">
    </div>

    <button class="btn">Register</button>
</form>
  
@endsection