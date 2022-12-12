@extends('layouts.app')

@section('title')
    Blog
@endsection
@section('meta-description', 'Meta description for blog page')
@section('content')
    <h1>Blog</h1>
    @include('partials.nav')
    <br>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <article>
                <h2>{{ $post['title'] }}</h2>
                <h3>Posted by {{ $post['user'] }}</h3>
                <p>{{ $post['content'] }}</p>
            </article>
        @endforeach
    </ul>
@endsection
