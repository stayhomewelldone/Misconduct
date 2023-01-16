<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>afgerond</title>
    @vite(['resources/css/app.css'])

</head>
<body class="bg-accent-dark bg-cover"
      style="background-image: url({{asset('images/background2.png') }})">
@extends('layouts.nav')
@section('content')

    <div class="overflow-x-auto inline-block flex flex-row">
        @foreach($meldingen as $melding)
            <div class="max-w-sm  rounded overflow-hidden shadow-lg m-2 border-4  items-center ">

                <div class="px-4 py-4 items-center">
                    <div class="font-bold text-xl mb-2">
                        <h1>{{$melding->user_id}}</h1>
                        {{$melding->category}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{$melding->created_at}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>

                </div>
            </div>

        @endforeach
    </div>

</body>
</html>
@endsection
