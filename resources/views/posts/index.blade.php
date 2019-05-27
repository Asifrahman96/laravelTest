@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    
    @if(count($posts) > 0)

       @foreach($posts as $post)
          <div class="card mt-2 rounded">
              <div class="card-header">
              <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              </div>
              <div class="card-img">
              <img src="/storage/cover_images/{{$post->cover_image}}" class="img" style="width:100%">
              </div>
              <div class="card-body">
              <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
              </div>
          </div>
       @endforeach
         <hr>
       {{$posts->links()}}

    @else

        <p> No post Found.</p>
    
    @endif


@endsection