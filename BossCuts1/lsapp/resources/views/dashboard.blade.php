@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    <div class="panel-body">
                        
                        <h3 class="text-center">Your Blog Posts</h3>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
