@extends('layout.master')

@section('content')
<!-- 404 Error Text -->
<div class="text-center">
    <div class="error mx-auto" data-text="404">@yield('code')</div>
    <p class="lead text-gray-800 mb-5">@yield('message')</p>
    <a href="/">&larr; Back to Dashboard</a>
</div>
@endsection