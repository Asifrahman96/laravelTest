@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)

                      <table class="table table-hover">
                        <thead class="thead-dark text-center">
                         <tr>
                            <th>Blog Name</th>
                            <th>Created Date</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">    
                        @foreach($posts as $post)
                           <tr>
                               <td>{{$post->title}}</td>
                               <td>{{$post->created_at}}</td>
                               <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</td>

                               <td>
                                {!!Form::open(['action'=> ['PostController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}

                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=> 'btn btn-danger btn-sm'])}}
                                 
                                {!!Form::close()!!}
                               </td>
                           </tr>
                         @endforeach
                        </tbody>
                       </table>

                       @else

                       <p>You have No posts</p>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
