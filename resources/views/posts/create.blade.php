@extends('layouts.master')
@section('content')
    <section class="container-fluid">
        <section class="row m-0 p-0">
            <section class="col-6 offset-3">
               <section class="mt-3">
                   <h3>Create Post</h3>
                   <form action="{{route('post.store')}}" method="post">
                       @csrf
                       <section class="form-group">
                           <label for="title">Post title:</label>
                           <input type="text" name="title" id="title" placeholder="enter title" class="form-control" required>
                       </section>
                       <section class="form-group">
                           <label for="body">Post body:</label>
                           <textarea name="body" id="body" class="form-control" required></textarea>
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
