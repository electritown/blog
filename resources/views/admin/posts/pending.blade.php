@extends('admin.index')
@section('Title')
    Pending Posts
@endsection
@section('buttons')
<a href="{{route('post.create')}}" class="btn btn-primary">Create Post</a>

@endsection
@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Post Name</th>
                    <th>Created At</th>
                    <th>Tags</th>
                    @role('admin')
                    <th>Delete Button</th>
                    @endrole
                    <th>Show Button</th>
                    <th>Approve Button</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
<<<<<<< HEAD
                          <form  action="{{route('post.destroy' , $post->id)}}" method="post">                  
                                @csrf
                                @method('delete')
                                @role('admin|reviewer')
                                   <th><button class="btn btn-danger" name="submit">Delete</button></th>
                                @endrole
                        </form>
=======
                          @if(count($post->tags)>0)
                          @foreach($post->tags as $tag)
                          <th>{{$tag->name}}</th>
                          @endforeach
                          @endif
                          @role('admin')
                                                          
                                   <th><a class="btn btn-danger" href="post/{{$post->id}}/delete" name="submit">Delete</a></th>
                        @endrole

>>>>>>> 516ce7d814ae1c8aa956ada20f5bbf361f6ffc28
                        <th><a class="btn btn-primary" href="post/{{$post->id}}">Show</a></th>
                        @role('admin|reviewer')
                          <th><a class="btn btn-secondary" href="post/{{$post->id}}/approve">Approve </a></th>
                        @endrole
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection