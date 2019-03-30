@extends('layouts.app')

@section('content')
<div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="mb-1 text-muted">{{$post->created_at->format('d m Y')}}</p>
        <hr>

        <pre class="">{{$post->body}}</pre>
      </div><!-- /.blog-post -->

@endsection