<!DOCTYPE html>
<html>

<head>
    <script src="https://use.fontawesome.com/5ed1a3010e.js"></script>
</head>

<body>

    @foreach($comments as $comment)
    @if ($comment->parent_id == null)
    <hr>
    <!-- <h4>Comment:</h4> -->
    @endif
    <div @if ($comment->parent_id != null) style="margin-left: 40px" @endif class="commentMargin">

        <strong>{{$comment->name}}</strong>
        <p>{{$comment->body}}</p>
        <button class="rebtn" data-id="{{$comment->id}}" data-post="{{$post_id}}"><i class="fa fa-reply" aria-hidden="true"></i></button>
        <div class="append"></div>
        <section>
            
            @include('posts.commentsDisplay', ['comments' => $comment->replies])
        </section>

    </div>
    @endforeach
    
    <script src="{{asset('dist/js/jquery-3.3.1.min.js')}}"></script>
    <script>
        $(function() {
            $('.rebtn').on('click', function() {
                console.log('Hello!');
                const commentID = $(this).attr("data-id");
                const postID = $(this).attr("data-post");
                const $nextDiv = $(this).next();
                console.log($nextDiv);
                let myHtml = '';
                $nextDiv.empty();
                myHtml +=
                `<div class="mt-5">
                <form action="{{route('comment.store')}}" method="post" class="frm">
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
                        <input type="hidden" name="post_id" value="${postID}" class="form-control">
                    </section>
                    <section class="form-group">
                        <input type="hidden" name="parent_id" value="${commentID}" class="form-control">
                    </section>
                    <section class="form-group">
                        <input type="button" value="Reply" class="btn btn-info reply">
                        <input type="button" value="cancel" class="btn btn-secondary cancel">
                        
                    </section>
                </form>
            </div>`

                    $nextDiv.append(myHtml);
                    $(document).on('click', '.cancel', function() {
                        $nextDiv.empty();
                    })
                    $(document).on('click', '.reply', function(event) {
                        document.querySelector('.frm').submit();
                        
                        $nextDiv.empty();
                    })
            })
        })
    </script>
    
</body>

</html>