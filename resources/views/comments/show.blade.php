@extends('layouts.master')
@section('content')
    <section class="container-fluid">
        <section class="row">
            <section class="col-6 offset-3">
                <section>
                    <table class="table table-dark table-hover">
                        <thead class="text-primary">
                        <td>postID</td>
                        <td>commentId</td>
                        <td>commentName</td>
                        <td>commentBody</td>
                        <td>commentPostID</td>
                        <td>commentParentID</td>
                        <td>commentDelete</td>
                        </thead>
                        <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{$postID}}</td>
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->name}}</td>
                                <td>{{$comment->body}}</td>
                                <td>{{$comment->post_id}}</td>
                                <td>{{$comment->parent_id}}</td>
                                <td>
                                    <form action="{{route('comment.destroy', $comment->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </section>
        </section>
    </section>
@endsection
