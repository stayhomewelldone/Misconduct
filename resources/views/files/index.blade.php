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
@extends('layouts.nav')
@section('content')
<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">
<div>


</div>



<div class="  grid grid-cols-8  overflow-x-auto  flex flex-row " >
    @foreach($files as $file)
        <div class="   max-w-sm rounded overflow-hidden shadow-lg m-2 border-4 border-blue-600 items-center ">

            <div class=" grid justify-items-center  px-4 py-6 items-center ">



                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                </svg>


{{--                <h1>{{$file->user_id}}</h1>--}}
                <div class="font-bold text-xl mb-2 ">
                    {{$file->number}}
                </div>

                <p class="text-gray-700 text-base">
                    {{$file->created_at}}
                </p>
                <div>

                    <form action="{{route('files.destroy', $file->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a            type="submit"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >Verwijder Dossier</button></a>
                    </form>
                </div>


                <div>
                    <a      href="{{route('files.show', $file->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >Bekijk Dossier</button> </a>
                </div>

            </div>
        </div>

    @endforeach
</div>
</body>
</html>
@endsection
