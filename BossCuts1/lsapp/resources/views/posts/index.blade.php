<!-- /layouts/app.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="container justify-content-center">
            <div class="row">
    @if (count($posts) > 0)
        @foreach($posts as $post)
		<div class="col">
			<div class="card">
			  <img src="https://via.placeholder.com/150" class="card-img-top" alt="Test">
			  <div class="card-body">
				<h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
				<p class="card-text">By: {{$post->user_id}}</p>
				<small>Written on {{$post->created_at}}</small>
				<a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		</div>
        @endforeach
        <div class="container">
        {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
	  </div>
</div>
@endsection
