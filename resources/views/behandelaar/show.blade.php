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

<body class="bg-accent-dark bg-cover"
      style="background-image: url({{asset('images/background2.png') }})">
@extends('layouts.nav')
@section('content')
<div class="overflow-x-scroll inline-block flex items-center m-5 ">
       <div>
           <div>
        <h1 class="font-bold text-2xl">Melding Nummer: {{$melding->id}}</h1>
        <p>{{$melding->urgency}}</p>
        <p>Datum van de melding: {{$melding->created_at}}</p>
        <p>Personeels nummer: {{$melding->user_id}}</p>
        <p>Omschrijving: {{$melding->issue}}</p>
           </div>
         <div>
             <h1 class="font-bold text-2xl">Stappenplan:</h1>
             <div class="flex">
             <input type="checkbox" name="checkbox">
             <label for="checkbox">1.Ga in gesprek met de werknemer die deze melding heeft gemaakt</label>
             </div>

             <div class="flex">
             <input type="checkbox" name="checkbox2">
             <label for="checkbox2">2.Ga in gesprek met de Patiënt waarover de melding gedaan is</label>
             </div>

             <div class="flex">
             <input type="checkbox" name="checkbox3">
             <label for="checkbox3">3.Ligt familie van de patiënt in over voorgedane situatie</label>
             </div>

             <div class="flex">
             <input type="checkbox" name="checkbox4">
             <label for="checkbox4">4.Waarschuw patiënt en familie voor eventuele gevolgen</label>
             </div>

             <div class="flex">
             <input type="checkbox" name="checkbox5">
             <label for="checkbox5">5.Schakel indien nodig is een professioneel in </label>
             </div>
             <form action="{{route('toggleActivity',$melding)}}" method="post">
                 @method('PATCH')
                 @csrf
                 <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                     Rond af
                 </button>
             </form>
         </div>
       </div>
</div>

</body>
</html>
@endsection
