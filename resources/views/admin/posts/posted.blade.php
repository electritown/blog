@extends('admin.index')

@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Post Name</th>
                    <th>Created At</th>
<<<<<<< HEAD
                    <th>Edit Button</th>
                    <th>Delete Button</th>
                    <th>View</th>
=======
                    <th>Show Button</th>
                    <th>Delete Button</th>
                    <th>Hide Post</th>
>>>>>>> 7349a2c7925fb8078928170c8a82535281a701a8
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
                          <form  action="{{route('post.destroy' , $post->id)}}" method="post">                  
<<<<<<< HEAD
                           @csrf
                           @method('delete')
                           <th> <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </th>
                           
                          <th>  <button name="submit"  class="btn btn-danger"> Delete</button> </th> 
                           <th> <a href="post/{{$post->id}}" class="btn btn-primary">View  </a></th> 
                           </form>
=======
                                @csrf
                                @method('delete')
                                <th><button class="btn btn-danger" name="submit">Delete</button></th>
                        </form>
                        <th><a class="btn btn-primary" href="post/{{$post->id}}">Show</a></th>

                <th><a class="btn btn-info" href="post/{{$post->id}}/hide">Hide</a></th>
>>>>>>> 7349a2c7925fb8078928170c8a82535281a701a8
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection