@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h2>

    <p>By. Catur Saputro in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts">Back to post</a>

@endsection