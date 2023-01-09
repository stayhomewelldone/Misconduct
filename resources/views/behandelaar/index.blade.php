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
    <div class="bg-cover bg-no-repeat bg-center w-full h-full" style="background-image: url('./resources/images/Healthcares 2.0.png')">
    <h1>Hello</h1>
    <h1>Kritieke meldingen</h1>
    <div class="overflow-x-auto inline-block flex flex-row">
    @foreach($criticalMeldingen as $criticalMelding)
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 border-4 border-red-600 items-center ">

                <div class="px-4 py-4 items-center">
                    <div class="font-bold text-xl mb-2">
                        <h1>{{$criticalMelding->user_id}}</h1>
                        {{$criticalMelding->category}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{$criticalMelding->created_at}}
                    </p>
                </div>
            </div>

    @endforeach
    </div>

    <h1>Zorgelijk meldingen</h1>
    <div class="overflow-x-scroll inline-block flex flex-row">
        @foreach($worrisomeMeldingen as $worrisomeMelding)
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 border-4 border-orange-600">

                <div class="px-4 py-4 items-center">
                    <h1>{{ $worrisomeMelding->user_id}}</h1>
                    <div class="font-bold text-xl mb-2">
                        {{ $worrisomeMelding->category}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{ $worrisomeMelding->created_at}}
                    </p>
                </div>
            </div>

        @endforeach
        </div>

    <h1>Niet Urgent</h1>
    <div class="overflow-x-scroll inline-block flex flex-row">
        @foreach($notUrgentMeldingen as $notUrgentMelding)
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 border-4 border-green-700">

                <div class="px-4 py-4 items-center ">
                    <h1>{{ $notUrgentMelding->user_id}}</h1>
                    <div class="font-bold text-xl mb-2">
                        {{ $notUrgentMelding->category}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{$notUrgentMelding->created_at}}
                    </p>
                </div>
            </div>

        @endforeach
    </div>

    </div>
</body>
</html>
@endsection
