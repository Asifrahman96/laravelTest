@extends('layouts.app')

@section('content')

   <a href="/posts" class="btn btn-outline-dark btn-sm">Go Back</a>

   <hr>
   
   <h1>{{$post->title}}</h1>
   <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" style="width:100%">
   <hr>
  
   <div>

      {!!$post->body!!}

   </div>


   <hr>

<small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>

   <hr>

   @if(!Auth::guest())

      @if(Auth::user()->id == $post->user_id)

          <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a>


          {!!Form::open(['action'=> ['PostController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}

          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Delete',['class'=> 'btn btn-danger btn-sm'])}}
      
          {!!Form::close()!!}

       @endif  

    @endif     

@endsection
