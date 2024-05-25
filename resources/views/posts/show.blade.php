@extends('layouts.app')
@section('content')

    <div class="card mt-4">
<div class="card-header">
    post Info
    </div>
    <div class="card-body">
    <h5 class="card-title">title: {{$post['title']}}</h5>
    <p class="card-text">Description {{$post['description']}}</p>
    </div>
    
</div>

<div class="card mt-4">
  <div class="card-header">
  Post Creator Info

  </div>
  <div class="card-body">
  <h5 class="card-title">Name {{$post->user?$post->user->name:""}}</h5>
            <p class="card-text">Email {{$post->user?$post->user->email:""}}</p>
            <p class="card-text">Created At {{$post->user?$post->user->created_at:""}}</p>
        </div>
  </div>

@endsection
  