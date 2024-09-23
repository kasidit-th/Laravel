@extends('layouts.main')

@section("content")
<h1 class="title">Wellcome {{auth()->user()->username}}</h1>  

 @endsection