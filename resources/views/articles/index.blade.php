@extends('layouts.master')
@section('content')
    <h3>Index</h3>
    <h4><a href="{{ route('articles.create') }}">Create</a></h4>
    @foreach($articles as $article)
        <div class="panel">
            <ul class="list-unstyled">
                <li>ID: {{ $article->id }}</li>
                <li>Title: {{ $article->title }}</li>
                <li>Body: {{ $article->body }}</li>
                <li>Created at : {{ $article->created_at }}</li>
                <li>Updated at : {{ $article->updated_at }}</li>
                <li>Published at : {{ $article->published_at }}</li>
                <p5><a href="{{ route('articles.show', [$article]) }}">Show </a></p5>
            </ul>
        </div>
    @endforeach
@endsection