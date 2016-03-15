@extends('layouts.master')
@section('content')
@include('includes.flash')
    <h4>Sign in</h4>
        <form class="form-group" method="post" action="{{ route('users.store') }}" name="signin">
            <input name="email" type="text" class="form-control" placeholder="email" />
            <input name="password" type="password" class="form-control" placeholder="password" />
            <input type="checkbox" class="checkbox">Remember me
            <button class="btn btn-info">Signin</button>
            {!! Form::token() !!}
        </form>
    <a href="{{ route('articles.index') }}">Back to index</a>
@endsection