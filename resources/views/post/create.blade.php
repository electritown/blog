@extends('layouts.app')
<script type="text/javascript" src='https://cloud.tinymce.com/5/tinymce.min.js'></script>
<script>
    tinymce.init({
        selector:'textarea'
        });

</script>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body:</label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required>Body</textarea>
                        </div>

                        <div class="form-group">
                            <label class="label" name="imagespost">Upload Image:</label>
                            <input name="imagespost" type="file" class="form-control-file">
                        </div>
                        <div class="form-group">                        <label class="label" name="tags">Tags:</label>
                        <select id="tag" class="form-control" name="tag[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                    @endforeach

                </select>
            </div>

                <div class="form-group">   <input type="submit" class="btn btn-success" value="Create post"></div>
                    </form>

             </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $('#tag').select2({
            allowClear:true,
            placeholder: 'Search for tags'
        })
      })

</script>
@endsection