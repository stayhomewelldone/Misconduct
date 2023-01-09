<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
@extends('layouts.app')
@section('content')
    <h1>Hello</h1>

    <br>

{{--    @foreach($meldingen as $melding)--}}
{{--        <p>{{$melding->urgency}}</p>--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    @if($melding->urgency == "critical")--}}
{{--        <p>{{$melding->urgency}}</p>--}}
{{--    @endif--}}
    <br>
     <a href="{{route('melding.create')}}">Melding maken</a>
    <a href="{{route('behandelaar.index')}}">Test</a>

</body>
</html>
@endsection
