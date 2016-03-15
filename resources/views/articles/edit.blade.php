@extends('layouts.master')
@section('content')
@include('includes.flash')
        <h4>Edit articles</h4>
        <a href="{{ route('articles.show', $articles) }}">Back to Show</a>
    <!-- Form of all input -->
            {!! Form::model('articles-update', [
                'method' => 'patch',
                'route' => ['articles.update' , $articles],
                'class' => 'form-group'
            ]) !!}
                {!! Form::text('title', $articles->title , [
                    'class'=>'form-control',
                    'placeholder'=>'' ]) !!}

                {!! Form::textarea('body', $articles->body , [
                    'class' => 'form-control',
                    'column' => '10',
                    'row' => '30',
                    'placeholder' => 'Type something...'
                ]) !!}

                {!! Form::submit('Update', [
                    'class' => 'btn btn-info'
                ]) !!}

            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection