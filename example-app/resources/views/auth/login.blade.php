@extends('layouts.main')

@section("content")
<h1 class="title"> Login to your account</h1>

<form action="" method="post" class="max-w-screen-md mx-auto">
@csrf

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
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </div>

    @error('failed')
    <p class="error mb-4">{{$message}}</p>
@enderror

    <button class="btn">Log in</button>
</form>
  
@endsection