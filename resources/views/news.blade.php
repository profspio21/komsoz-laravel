@extends('layouts.app')
@section('content')
    <h1 class="mb-5">News</h1>
    @foreach ($posts as $post)
        <article>
            <h2><a href="/news/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection