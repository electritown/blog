@extends('admin.index')

@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Tag Name</th>
                    <th>Created At</th>
                    <th>Edit Button</th>
                    <th>Delete Button</th>
                    <th>View All posts</th>
            </tr>
          
        @if(count($tags)>0)
        @foreach ($tags as $tag)
                  <tr>
                          <th>{{$tag->id}}</th>
                          <th>{{$tag->title}}</th>
                          <th>{{$tag->created_at}}</th>
                          <form  action="{{route('tag.destroy' , $tag->id)}}" method="post">                  
                           @csrf
                           @method('delete')
                           <th> <a href="/post/{{$tag->id}}/edit" class="btn btn-primary">Edit</a> </th>
                           
                          <th>  <button name="submit"  class="btn btn-danger"> Delete</button> </th> 
                           <th> <a href="post/{{$tag->id}}" class="btn btn-primary">View  </a></th> 
                           </form>
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection