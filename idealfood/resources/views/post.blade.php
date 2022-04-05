

@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="COL-MD-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

                <p>By. Someone in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name  }}</a></p>

                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts">Back to Post</a>
        </div>
    </div>
</div>  

@endsection




