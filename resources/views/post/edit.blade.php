@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
                    <form method="post" action="{{route('post.update' , $post->id)}}">
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <label class="label">Post Title: </label>
                            <input type="text" value="{{$post->title}}" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <input name="body" value="{{$post->body}}" class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Edit post" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection