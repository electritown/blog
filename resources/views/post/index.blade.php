@extends('layouts.app')


@section('content')

<div class="container">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">This is Our Red Bricks Blog Welcome</h1>
      <div class="col-md-6 px-0">
        <p class="lead my-3">To Add new post just press the key..."</p>
      </div>
      @if(Auth::check())
      @endif
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
      @if(count($tags)>0)
  <form class="form-group" action="{{route('Filter')}}" method="GET">
    
      @foreach($tags as $tag)
      <div class="form-check form-check-inline form-group">
      <input type="checkbox" class="form-check-input" name="tag[]" multiple="multiple" value="{{$tag->id}}">
      <label class="form-check-label" >{{$tag->name}}</label>
      <input hidden value="{{$tag->created_at}}" name="tagDate">
        </div>
      @endforeach
       <label class="form-group">First date</label>
      <input type="date" name="startDate" class="form-group" value="1000-01-01">
      <label class="form-group">End date</label>
      <input type="date" name="endDate" class="form-group" value="{{date('Y-m-d')}}">


      <div class="row-5">    
          <button method="GET" class="btn btn-primary">Filter</button>
        </div>
    </form>
    

      @endif
    @if(count($posts)>0)
    @foreach ($posts as $post)
    @if($post->isposted==1 & $post->ispending==0)
    <div class="col-6">
      <div class="no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
        style="overflow: both;">
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