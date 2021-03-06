@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            
          @if(count($posts)>0)
          
          @foreach ($posts as $post)
         
          @if($post->isposted==1 & $post->ispending==0)
            <div class="col-6">
                <div class="no-gutters border rounded overflow-hidden flex-md-row mb-6 shadow-sm h-md-250 position-relative" style="overflow: both;" >
                    <div class="col p-4 d-flex flex-column position-static" style="width: 45%; float: left;">
                    <strong class="d-inline-block mb-2 text-primary">{{$post->title}}</strong>
                      <div>
                      <h3 class="mb-0">{{$post->user->name}}</h3>
                      </div>
                    <div class="mb-1 text-muted">{{$post->created_at->format('d M Y')}}

                    </div>
                    
                    <p class="card-text mb-auto">{{substr(strip_tags($post->body),0,300)}}{{strlen($post->body)>300?"...":""}}</p>
                      <div class="col-auto d-none d-lg-block">
                          
                      <a href="post/{{$post->id}}" class="stretched-link">Continue reading</a>
                    <!-- place of image-->

                      </div>
                      
                    </div>
                    <div style="float: left; width: 50%; height: 140%; margin-left: 13px; margin: 0 Auto; margin-top: 19px; ">
                         <img style="width: 100%; height: 60%; border-radius: 8px;" src="/storage/imagespost/{{$post->image}}">


                      </div>
                  </div>

            </div>
            @endif
          @endforeach
          @endif
        </div>   
      </div>
  

@endsection