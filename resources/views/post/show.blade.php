@extends('layouts.app')

@section('content')


<div class="row">
      <div class ="img" id="img" >
              <img class="img" src="/storage/imagespost/{{$post->image}} " height="200">
        </div>  
      </div>
  <div class="col-md-8"> <h2 class="blog-post-title" style="text-overflow: hidden; "width=30%>{{$post->title}}</h2>
      <p class="mb-1 text-muted">{{$post->created_at->format('d M Y')}}</p>
      <p class="mb-1 text-muted">Auther: {{$post->user->name}}</p>

  </div>
      <hr>

      <div style="overflow: both" class="row">
        <div style="float: left; width: 50%">
          {!!$post->body!!}
        
      {{-- <form action="/post/{{$post->id}}" method="post">
          <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
          <a href="/post/{{$post->id}}/approve" class="btn btn-secondary">Approve</a>

        @csrf
        @method('delete') 
      <button name="submit"  class="btn btn-danger"> Delete</button>
      </form>--}}
      </div>
    
      </div> 
      <br>
  <!-- /.blog-post -->

    <br>
    <h2>Comments:</h2>
    <hr>
    @include('post.commentsDisplay', ['comments'=> $post->comments, 'post_id'=> $post->id])
    <hr />
    @if (Auth::check())
    @role('admin|author')
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
              @endrole
              @endif
@endsection


