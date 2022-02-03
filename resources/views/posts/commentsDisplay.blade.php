@foreach($comments as $comment)
@if ($comment->parent_id == null)
    <hr>
    <h4>Comment:</h4>
@endif
    <div @if ($comment->parent_id != null) style="margin-left: 40px" @endif class="commentMargin">

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
                    <input type="submit" value="Reply" class="btn btn-block btn-info" @if ($comment->parent_id != null) style="background-color: gray" @endif>
                    @if ($comment->replies != null)
                        <h4>Reply:<h4> 
                        
                    @endif
                </section>
            </form> 
            @include('posts.commentsDisplay', ['comments' => $comment->replies]) 
        </section>

    </div>
@endforeach


