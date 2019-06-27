@extends('sample.layout.master')
@php
$title = 'Blank Template';
@endphp

@section('addCss')
<!-- Page level custom style -->
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-info-circle fa-sm text-white-50"></i> Header Action</a>
</div>

<p class="lead">
    Your content here
</p>
@endsection

@section('addJs')
<!-- Page level custom scripts -->
@endsection