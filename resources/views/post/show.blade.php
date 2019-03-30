@extends('layouts.app')

@section('content')
<div class="container">
        
    <div class="col-md-8"> <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="mb-1 text-muted">{{$post->created_at->format('d M Y')}}</p>
    </div>
        <hr>
        <div class="col-md-6">
            {!!$post->body!!}
        </div>
    </div><!-- /.blog-post -->
      <hr>
      @include('post.commentsDisplay', ['comments'=> $post->comments, 'post_id'=> $post->id])
      <h4>Add comment</h4>
      <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea rows="5" class="form-control rounded-0" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
@endsection