@extends('layouts.master')
@section('content')
    <h1 style="text-align: center; margin-top: 35%;">404 Error , Sorry we cannot find the page.</h1>
    <h5 style="text-align: center;"><a href="{{ route('articles.index') }}">Go back to home page</a></h5>
@endsection