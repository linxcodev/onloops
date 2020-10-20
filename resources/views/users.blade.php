@extends('layout')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <h1>User List</h1><br><br>
    @foreach ($users as $user)
      <div class="post-preview">
        <h2 class="post-title">
          {{$user->name}} | {{$user->email}}
        </h2>
        Comment:
        @foreach ($user->comments as $comment)
          <p class="post-meta">Posted by
            {{$comment->comment}}</p>
        @endforeach
      </div>
      <hr>
    @endforeach
  </div>
@endsection
