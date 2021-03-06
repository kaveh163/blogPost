@extends('layouts.master')
@section('content')
    <section class="container-fluid">
        <section class="row m-0 p-0">
            <section class="col-6 offset-3">
                <section class="mt-3" style="font-family: 'Comic Sans MS'">
                    <h5>Post title:{{$post->title}}</h5>
                    <p>Post body:{{$post->body}}</p>
                    <hr>
                    <h4>Display Comment</h4>
                    @include('posts.commentsDisplay', ['comments' => $post->comments,'post_id'=>$post->id])
                    <hr>
                    <h5>Add Comment</h5>
                    <form action="{{route('comment.store')}}" method="post">
                        @csrf
                        <section class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </section>
                        <section class="form-group">
                            <label for="body">Body:</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
                        </section>
                        <section class="form-group">
                            <input type="hidden" name="post_id" value="{{$post->id}}" class="form-control">
                        </section>
                        <section class="form-group">
                            <input type="submit" value="submit" class="btn btn-success btn-block">
                        </section>
                    </form>

                </section>
            </section>
        </section>
    </section>
@endsection
@section('css')
    <style>
        p {
            border:1px solid lightgrey;
        }
        hr {
            background-color:darkgrey;
        }
        input[type=text]{
            border: 2px inset lightgrey;
        }
        textarea{
            border:2px inset lightgrey!important;
        }
    </style>
@endsection
