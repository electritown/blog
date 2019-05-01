@extends('admin.index')
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
                    <th>Delete Button</th>
                    <th>Show Button</th>
                    <th>Approve Button</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
                          @if(count($post->tags)>0)
                          @foreach($post->tags as $tag)
                          <th>{{$tag->name}}</th>
                          @endforeach
                          @endif
                          @role('admin')
                                                          
                                   <th><a class="btn btn-danger" href="post/{{$post->id}}/delete" name="submit">Delete</a></th>
                        @endrole

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