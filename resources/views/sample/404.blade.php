@extends('sample.layout.master')
@php
    $title = 'Not Found';
@endphp

@section('addCss')
<!-- Page level custom style -->
@endsection

@section('content')
<!-- Error Text -->
<div class="text-center">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-5">{{$title}}</p>
    <a href="{{route('sampleDashboard')}}">&larr; Back to Dashboard</a>
</div>
@endsection

@section('addJs')
<!-- Page level custom scripts -->
@endsection