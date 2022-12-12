@extends('layouts.app')

@section('title')
    Communities
@endsection
@section('meta-description', 'Meta description for communities')
@section('content')
    @include('partials.nav')
    <br>
    <h1>Communities</h1>
    <ul>
        @foreach ($communities as $community)
            <article>
                <h2>{{ $community['name'] }}</h2>
                <p>{{ $community['description'] }}</p>
            </article>
        @endforeach
@endsection
