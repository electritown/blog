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
=======
                    <th>Tag</th>
                    <th>Delete Button</th>
                    <th>Show Button</th>
>>>>>>> 7349a2c7925fb8078928170c8a82535281a701a8
                    <th>Approve Button</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
<<<<<<< HEAD
                          <th>{{$post->created_at}}</th> 
=======
                          <th>{{$post->created_at}}</th>
                          <form  action="{{route('post.destroy' , $post->id)}}" method="post">                  
                                @csrf
                                @method('delete')
                                <th><button class="btn btn-danger" name="submit">Delete</button></th>
                        </form>
                        <th><a class="btn btn-primary" href="post/{{$post->id}}">Show</a></th>

>>>>>>> 7349a2c7925fb8078928170c8a82535281a701a8
                          <th><a class="btn btn-secondary" href="post/{{$post->id}}/approve">Approve </a></th>
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection