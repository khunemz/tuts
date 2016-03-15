@extends('layouts.master')
@section('content')
    <h4>Index User info</h4>
    <p>ID {{ $users->id }}</p>
    <p>Name {{ $users->name }}</p>
    <p>User Email {{ $users->email }}</p>
    <a href="{{ route('articles.index') }}">Back to index</a>
    <a href="{{ route('users.edit', [$users]) }}">Edit</a>
    <a href="{{ route('users.destroy', [$users]) }}">Delete</a>
@endsection
