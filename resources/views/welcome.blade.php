<!-- Se extiende del layaout de app y se indican las secciones que se requieren en la app -->
@extends('layouts.app')

<!-- Las secciones se pueden indicar de estas dos maneras. En una línea o varias, dependiendo del contenido. -->
@section('title')
    Home
@endsection

@section('meta-description', 'Meta description for home page')
@section('content')
    <h1>Home</h1>
    <ul>
        {{-- La notación de llaves es para que al renderizar el componente para también evitar inyeccción de código --}}
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">Acerca</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
    </ul>
@endsection
