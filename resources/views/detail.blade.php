@extends('layout.master')

@section('title', 'Detail Page')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>{{ $post->description }}</p>
                <p>By: <strong>{{ $post->author }}</strong> | {{ date('j F Y', strtotime($post->date)) }} |
                    @if($post->category->id == 1)
                        <span class="d-inline bg-success rounded p-1 text-white">{{ $post->category->type }}</span>
                    @elseif($post->category->id == 2)
                        <span class="d-inline bg-warning rounded p-1 text-white">{{ $post->category->type }}</span>
                    @else
                        <span class="d-inline bg-primary rounded p-1 text-white">{{ $post->category->type }}</span>
                    @endif
                    </p>
                <img src="{{ $post->image }}" class="img-fluid" style="width: 100%" alt="...">

                <div class="container mt-3">
                    <a href="https://id.linkedin.com/"><img src="/img/linkedin.png" class="rounded-circle" style="width: 3vw"alt=""></a>
                    <a href="https://id-id.facebook.com/"><img src="/img/facebook.png" class="rounded-circle" style="width: 3.5vw"alt=""></a>
                    <a href="https://twitter.com/?lang=id"><img src="/img/twitter.png" class="rounded-circle" style="width: 3.5vw"alt=""></a>
                    <a href="https://www.instagram.com/"><img src="/img/instagram.png" class="rounded-circle" style="width: 3vw"alt=""></a>
                </div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
                <a href="/" class="d-block mt-3">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
