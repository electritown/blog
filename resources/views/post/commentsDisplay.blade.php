@foreach($comments as $comment)
    <div class="display-comment">
        <p>{{ $comment->body }}</p>
        <br/>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="hidden" name="postid" value="{{ $post_id }}" />
            </div>
        </form>
    </div>
@endforeach