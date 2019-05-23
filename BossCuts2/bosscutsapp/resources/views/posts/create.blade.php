@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:10em;">
    <h1>Booking Form</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Choose Style')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Pick style..'])}} 
        </div>
        <div class="form-group">
                {{Form::label('body', 'Any thing we need to know?')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!} 
    </div>
@endsection