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
<body>
{{--@extends('layouts.app')--}}
{{--@section('content')--}}
    <form action="{{route('melding.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
                <label for="urgency" class="form-label"></label>
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

       <div>
               <label for="category" class="form-label"></label>
               <input id="category"
                      type="text"
                      name="category"
                      value="{{old('category')}}" />
               @error('category')
               <span>{{$message}}</span>
               @enderror
           </div>

        <div>
                <label for="issue" class="form-label"></label>
                <input id="issue"
                       type="text"
                       name="issue"
                       value="{{old('issue')}}" />
                @error('issue')
                <span>{{$message}}</span>
                @enderror
            </div>

        <div>
            <label for="file_path" class="form-label"></label>
            <input id="file_path"
                   type="file"
                   name="file_path"
                   value="{{old('file_path')}}" required />
            @error('file_path')
            <span>{{$message}}</span>
            @enderror
        </div>
        <button type="submit" name="submit" class="submit">Stuur Melding</button>

        <a href="{{route('melding.index')}}">Home</a>
    </form>
</body>
</html>
{{--@endsection--}}
