@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="COL-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to My Post</a>

                <a href="/posts" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

                <a href="/posts" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>


                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                
        </div>
    </div>
</div>  
@endsection