@extends('layouts.base')

@section('title')
<title>Boombo | Movies</title>    
@endsection

@section('content')
@include('components.navbar')

@include('movie.all_movies')

@endsection

