@extends('layouts.app')

@section('content')

  <div class="container">
     <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">This is Our Red Bricks Blog Welcome</h1>
        <div class="col-md-6 px-0">
            <p class="lead my-3">To Add new tag just press the key..."</p>
          </div>
          @if(Auth::check())
    <a href="{{route('tag.create')}}" class="btn btn-primary">Create tag</a>
    @endif
    </div>
  </div>
</div>


        <div class="container">
          <div class="row">
            @if(count($tags)>0)
            @foreach ($tags as $tag)
              <div class="col-6">
                  <div class="no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-30 position-relative">
                      <div class="col p-2 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">Tag: {{$tag->id}}</strong>
                        <div>
                        <h3 class="mb-0">{{$tag->name}}</h3>
                        </div>
                    </div>

              </div>          
              </div>   

            @endforeach
            @endif
        </div>
      </div>
    
@endsection