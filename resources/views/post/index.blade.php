@extends('layouts.app')

@section('content')

  <div class="container">
     <div class="jumbotron p-2 p-md-1 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">This is Our Red Bricks Blog Welcome</h1>
        <div class="col-md-6 px-0">
            <p class="lead my-3">To Add new post just press the key..."</p>
          </div>
    <a href="{{route('post.create')}}" class="btn btn-primary">Create Post</a>
    </div>
  </div>
</div>


        <div class="container">
          <div class="row">
            @if(count($posts)>0)
            @foreach ($posts as $post)
              <div class="col-6">
                  <div class="no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                      <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>
                        <div>
                        <h3 class="mb-0">TAGS IN FUTURE</h3>
                        </div>
                      <div class="mb-1 text-muted">{{$post->created_at->format('d m Y')}}</div>
                      <p class="card-text mb-auto">{{substr(strip_tags($post->body),0,300)}}{{strlen($post->body)>300?"...":""}}</p>
                        <div class="col-auto d-none d-lg-block">
                        <a href="post/{{$post->id}}" class="stretched-link">Continue reading</a>
                      <!-- place of image-->
                            
                        </div>
                      </div>
                    </div>

              </div>
            @endforeach
            @endif
          </div>   
        </div>
    
@endsection