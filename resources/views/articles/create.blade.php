@extends('layouts.master')
@section('content')
    <h3><a href="{{ route('articles.index') }}">Back to index</a></h3>
    <h4>Create</h4>
    <!-- Form of all input -->
            {!! Form::model('articles-store', [
                'method' => 'post',
                'route' => ['articles.store' , ],
                'class' => 'form-group'
            ]) !!}
                {!! Form::text('title', old('title') , [
                    'class'=>'form-control',
                    'placeholder'=>'Title' ]) !!}

                {!! Form::textarea('body', old('body'), [
                    'class' => 'form-control',
                    'column' => '10',
                    'row' => '30',
                    'placeholder' => 'Type something...'
                ]) !!}

                {!! Form::submit('Post', [
                    'class' => 'btn btn-default'
                ]) !!}

            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection