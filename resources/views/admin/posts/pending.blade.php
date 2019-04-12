@extends('admin.index')

@section('content2')

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                    <th>ID</th>
                    <th>Post Name</th>
                    <th>Created At</th>
                    <th>Delete Button</th>
                    <th>Approve Button</th>
            </tr>
          
        @if(count($posts)>0)
        @foreach ($posts as $post)
                  <tr>
                          <th>{{$post->id}}</th>
                          <th>{{$post->title}}</th>
                          <th>{{$post->created_at}}</th>
                          <th></th>
                          <th><a class="btn btn-secondary" href="post/{{$post->id}}/approve">Approve </a></th>
                  </tr>
                
@endforeach      
@endif
</thead>
</table>
      </div>

@endsection