<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Misconduct</title>
</head>
<body>
@if(Session::get('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

@if(Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
@endif

@csrf
<div class="sidenav">
    <button   type="button" class="block">
        <a >Home</a>
    </button>
    <button type="button" class="block">
        <a href="{{route('notifications.index')}}">Mijn Meldingen</a>
    </button>
    <button type="button" class="block">
        <a href="{{route('files.index')}}">Mijn Dossier</a>
    </button>
    <button type="button" class="block">
        <a href="{{route('profiles.index')}}">Mijn Profiel</a>
    </button>
    <button type="button" class="block">
        <a href="{{route('settings.index')}}">Instellingen</a>
    </button>
    <button type="button" class="block">
        <a >Uitloggen</a>
    </button>
</div>



</body>
</html>




