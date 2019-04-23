@extends('admin.index')

@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Post Name</th>
                    <th>Created At</th>
                    <th>Edit Button</th>
                    <th>Delete Button</th>
                    <th>View</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
                          <form  action="{{route('post.destroy' , $post->id)}}" method="post">                  
                           @csrf
                           @method('delete')
                           <th> <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </th>
                           
                          <th>  <button name="submit"  class="btn btn-danger"> Delete</button> </th> 
                           <th> <a href="post/{{$post->id}}" class="btn btn-primary">View  </a></th> 
                           </form>
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection