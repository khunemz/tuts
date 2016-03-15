@extends('layouts.master')
@section('content')
@include('includes.flash')
    <h4><a href="{{ route('articles.edit', [$articles]) }}">Edit article</a></h4>
    <h4><a href="{{ route('articles.index') }}">Index</a></h4>
    <ul>
        <li>Title : {{ $articles->title }}</li>
        <hr />
        <li>{{ $articles->body }}</li>
    </ul>
    <!-- Form of all input -->
            {!! Form::model('articles-destroy', [
                'method' => 'delete',
                'route' => ['articles.destroy' , $articles->id],
                'class' => 'form-group'
            ]) !!}

            {!! Form::submit('Delete', [
                'class' => 'btn btn-danger'
            ]) !!}

            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection