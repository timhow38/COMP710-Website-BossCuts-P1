<!-- /layouts/app.blade.php -->
@extends('layouts.app') 
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="container" style="padding-top:6em;">
  <div class="row">
    <div class="col">
      <h3>Client Bookings</h3> 
    </div>
  </div>
  <div class="row"> 
    
    @if (count($posts) > 0) @foreach($posts as $post)
<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title" href="/posts/{{$post->id}}">Hair Style: {{$post->title}}</h5>
    <p class="card-text">{!! $post->body !!}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Client: </strong> {{ Auth::user()->name }}</li>
    <li class="list-group-item"><strong>Email: </strong> {{ Auth::user()->email }}</li>
    <li class="list-group-item"><strong>Time: </strong> {{$post->created_at}}</li>
  </ul>
  <div class="card-body">
  <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
    {!!Form::open(['action' => ['PostsController@update', $post->id], 'method'=> 'POST', 'class' => 'float-right']) !!} 
      {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete',['class' => 'btn btn-danger'])}} 
    {!!Form::close()!!}
  </div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No posts found</p>
@endif

  

</div>
</div>


   








@endsection