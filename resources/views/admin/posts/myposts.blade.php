@extends('admin.index')
@section('Title')
    My Posts
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
                    <th>Status</th>
                    <th>Show Button</th>
                    <th>Edit Button</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
                          <th>{{$post->isposted == 1? 'Posted':'Pending'}}</th>
                          <th><a class="btn btn-secondary" href="post/{{$post->id}}">Show</a></th>
                          <th><a class="btn btn-primary" href="post/{{$post->id}}/edit">Edit</a></th>
                        </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection