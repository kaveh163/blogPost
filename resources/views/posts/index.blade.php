@extends('layouts.master')
@section('content')
    <section class="container-fluid">
        <section class="row m-0 p-0">
            <section class="col-6 offset-3">
                <section>
                    <h3>Manage Posts</h3>
                    <a href="{{route('post.create')}}" style="float:right">Create Post</a>
                    <section>
                        <table class="table table-hover table-dark">
                            <thead>
                            <th>Post ID</th>
                            <th>Post Title</th>
                            <th>Post Action</th>
                            <th>Delete Post</th>
                            <th>Show Comment</th>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td><a href="{{route('post.show', $post->id)}}">View Post</a></td>
                                <td>
                                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                                <td><a href="{{route('comment.show',$post->id)}}">View Comment</a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </section>
            </section>
        </section>
    </section>
@endsection
