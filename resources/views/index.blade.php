@extends('layouts.app')

@section('content')

  <div class="container">
     <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
</div>


        <div class="container">
          <div class="row">
            @foreach ($posts as $post)
              <div class="col-6">
                  <div class="no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                      <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>
                        <h3 class="mb-0">Featured Post</h3>
                      <div class="mb-1 text-muted">{{$post->created_at->format('d m Y')}}</div>
                      <p class="card-text mb-auto">{{Str::limit($post->body,60)}}</p>
                        <div class="col-auto d-none d-lg-block">
                      <!-- place of image-->
                            
                        </div>
                      </div>
                    </div>

              </div>
            @endforeach
          </div>   
        </div>
    
@endsection