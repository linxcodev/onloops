@extends('layout')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <h2 class="post-title">
      {{$post->title}}
    </h2>
    <p>{{$post->content}}</p>
    <p class="post-meta">Posted by
      <a href="#">{{$post->user->name}} | {{$post->user->email}}</a>
      on {{$post->created_at}}</p>
  </div>
@endsection
