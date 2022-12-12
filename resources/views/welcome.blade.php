<!-- Se extiende del layaout de app y se indican las secciones que se requieren en la app -->
@extends('layouts.app')

<!-- Las secciones se pueden indicar de estas dos maneras. En una línea o varias, dependiendo del contenido. -->
@section('title')
    Home
@endsection

@section('meta-description', 'Meta description for home page')
@section('content')
    <h1>Home</h1>
    @include('partials.nav')
@endsection
