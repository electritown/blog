@extends('admin.index')

@section('Title')
     Tags Control
@endsection
@section('buttons')
<a href="{{route('tag.create')}}" class="btn btn-primary">Create Tag</a>

@endsection

@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Tag Name</th>
                    <th>Created At</th>
                    <th>View all posts</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
          
        @if(count($tags)>0)
        @foreach ($tags as $tag)
                  <tr>
                          <th>{{$tag->id}}</th>
                          <th>{{$tag->name}}</th>
                          <th>{{$tag->created_at}}</th>
                          <th><a href="tag/{{$tag->id}}" class="btn btn-primary">View</a></th>
                                @csrf
                                <th><a href="/tag/{{$tag->id}}/edit" class="btn btn-primary">Edit</a></th>
                                <th><a href="/tag/{{$tag->id}}/delete"  class="btn btn-danger"> Delete</a></th>  
                        </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection