@extends('admin.index')

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
                          <form  action="{{route('tag.destroy' , $tag->id)}}" method="post">                  
                                @csrf
                                @method('delete')
                                <th><a href="/tag/{{$tag->id}}/edit" class="btn btn-primary">Edit</a></th>
                                <th><button name="submit"  class="btn btn-danger"> Delete</button></th>  
                                </form>
                        </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection