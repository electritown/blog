@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit tag</div>
                <div class="card-body">
                    <form method="post" action="{{route('tag.update' , $tag->id)}}">
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <label class="label">Tag name: </label>
                            <input type="text" name="name" value="{{$tag->name}}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success"value="Update tag" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection