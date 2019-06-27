@extends('sample.layout.master')
@php
$title = 'Blank Page';
@endphp

@section('addCss')
<!-- Page level custom style -->
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{$title}}</h1>
@endsection

@section('addJs')
<!-- Page level custom scripts -->
@endsection