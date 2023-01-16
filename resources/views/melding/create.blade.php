<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Melding</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-accent-dark bg-cover"
      style="background-image: url({{asset('images/background2.png') }})">
@extends('layouts.nav')
@section('content')
    <section class="flex items-center justify-center h-screen">
    <form action="{{route('melding.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="m-1">
            <label for="urgency" class="form-label">Urgentie:</label>
            <select name="urgency" id="urgency">
                <option value="">Kies urgentie</option>
                <option value="critical">Ernstig</option>
                <option value="worrisome">Zorgelijk</option>
                <option value="not urgent">Niet urgent</option>
            </select>
                @error('urgency')
                <span>{{$message}}</span>
                @enderror
        </div>

       <div class="m-1">
               <label for="category" class="form-label">Korte samenvatting:</label>
               <input id="category"
                      type="text"
                      name="category"
                      value="{{old('category')}}" />
               @error('category')
               <span>{{$message}}</span>
               @enderror
       </div>

        <div class="m-1">
                <label for="issue" class="form-label">Wat is gebeurt?</label>
                <input id="issue"
                       type="text"
                       name="issue"
                       value="{{old('issue')}}" />
                @error('issue')
                <span>{{$message}}</span>
                @enderror
        </div>

        <div class="m-1">
            <label for="file_path" class="form-label">Voeg bestand toe:</label>
            <input id="file_path"
                   type="file"
                   name="file_path"
                   value="{{old('file_path')}}" required />
            @error('file_path')
            <span>{{$message}}</span>
            @enderror

        </div>
            <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ">
                Maak melding
            </button>



    </form>

    </section>
</body>
</html>
@endsection
