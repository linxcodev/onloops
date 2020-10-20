@extends('layout')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <h1>Comment Guest</h1><br><br>
    @foreach ($comments as $comment)
      <div class="post-preview">
        <h2 class="post-title">
          {{$comment->comment}}
        </h2>

        <p class="post-meta">Posted by
          <a href="#">{{$comment->name}} | {{$comment->email}}</a>
          on {{$comment->created_at}}</p>
      </div>
      <hr>
    @endforeach
  </div>
@endsection
