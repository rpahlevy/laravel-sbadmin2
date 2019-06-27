<title>
    @if (isset($title))
    {{$title}} | {{config('app.name')}}
    @else
    {{config('app.name')}}
    @endif
</title>