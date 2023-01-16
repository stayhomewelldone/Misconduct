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
<body class="bg-accent-dark bg-cover "
      style="background-image: url({{asset('images/background.png') }})">

<section>
 <div class="flex-row flex justify-center justify-evenly my-80">


     <a href= "{{route("behandelaar.index")}}" class="bg-white hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-full w-1/4 h-16 flex justify-center  flex items-center">
         <svg class="w-6 inline-block " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
             <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
         </svg>
         Meldingen
     </a>

     <a href= "{{route("patients.index")}}" class="bg-white hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-full w-1/4 h-16 flex justify-center  flex items-center">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 inline-block">
             <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
         </svg>
         Patienten
     </a>

     <a href= "{{route("files.index")}}" class="bg-white hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-full w-1/4 h-16 flex justify-center  flex items-center">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 inline-block">
             <path fill-rule="evenodd" d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zM9 12.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5H9z" clip-rule="evenodd" />
         </svg>
         Dossiers
     </a>
</div>
</section>
</body>
</html>
{{--@endsection--}}
