@foreach($comments as $comment)
    <div @if ($comment->parent_id != null) style="margin-left: 40px" @endif>

        <strong>{{$comment->name}}</strong>
        <p>{{$comment->body}}</p>
        <section>
            <form action="{{route('comment.store')}}" method="post">
                @csrf
                <section class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </section>
                <section class="form-group">
                    <label for="body">Body:</label>
                    <input type="text" name="body" id="body" class="form-control">
                </section>
                <section class="form-group">
                    <input type="hidden" name="post_id"  value="{{$post_id}}" class="form-control">
                </section>
                <section class="form-group">
                    <input type="hidden" name="parent_id" value="{{$comment->id}}" class="form-control">
                </section>
                <section class="form-group">
                    <input type="submit" value="Reply" class="btn btn-block btn-success">
                </section>
            </form>
            @include('posts.commentsDisplay', ['comments' => $comment->replies])
        </section>

    </div>
@endforeach


