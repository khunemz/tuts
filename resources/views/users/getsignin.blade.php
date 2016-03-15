@extends('layouts.master')
@section('content')
@include('includes.flash')
    <h4>Sign in</h4>
        <form class="form-group" method="post" action="{{ route('users.store') }}" name="signin">
            <input name="email" type="text" class="form-control" placeholder="email" />
            <input name="password" type="password" class="form-control" placeholder="password" />
            <input type="checkbox" class="checkbox">Remember me
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button class="btn btn-info">Signin</button>
        </form>
    {{--<a href="{{ route('articles.index') }}">Back to index</a>--}}
    {{--<a href="{{ route('users.create') }}">Or Register</a>--}}
@endsection