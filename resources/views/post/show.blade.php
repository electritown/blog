@extends('layouts.app')

@section('content')
<div class="container">
        
    <div class="col-md-8"> <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="mb-1 text-muted">{{$post->created_at->format('d M Y')}}</p>
        <p class="mb-1 text-muted">Auther: {{$post->user->name}}</p>

    </div>
        <hr>
        <div class="col-md-6">
            {!!$post->body!!}
        </div>
    <!-- /.blog-post -->
    @if (Auth::check())

<div class="button-box col-lg-12">


        <form action="/post/{{$post->id}}" method="post">
            <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

          @csrf
          @method('delete') 
        <button name="submit"  class="btn btn-danger"> Delete</button>
        </form>
    </div>

     @endif   
      <br>
      <h2>Comments:</h2>
      <hr>
      @include('post.commentsDisplay', ['comments'=> $post->comments, 'post_id'=> $post->id])
      <hr />
      @if (Auth::check())
      <div class="container">
      <h4>Add comment</h4>
      <form method="post" action="{{ route('comments.store') }}">
                        @csrf

                        <div class="form-group">
                            <textarea rows="6" class="form-group" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Add Comment" />
                        </div>
                       
                    </form>
                </div>
                @endif
            </div>
@endsection


