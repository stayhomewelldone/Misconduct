

    @vite(['resources/css/app.css'])


<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">
<div class="card-body">
    <a href="{{route('patients.create')}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500  float-right">

        Patiënt Toevoegen
    </a>
</div>


    <div class="  grid grid-cols-8  overflow-x-auto inline-block flex flex-row">
        @foreach($patients as $patient)
            <div class="   max-w-sm rounded overflow-hidden shadow-lg m-2 border-4 border-blue-600 items-center ">

                <div class=" grid justify-items-center  px-4 py-6 items-center ">
                    <svg class="w-10"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

{{--                    <h1>{{$patient->user_id}}</h1>--}}
                    <div class="font-bold text-xl mb-2 ">
                        {{$patient->number}}
                    </div>
                    <div class="font-bold text-xl mb-2 ">
                        {{$patient->score}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{$patient->created_at}}
                    </p>
                    <div>

                        <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a            type="submit"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >Verwijder Patiënt</button></a>
                        </form>
                    </div>


                    <div>
                        <a      href="{{route('patients.show', $patient->id)}}"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >Bekijk Patiënt</button> </a>
                    </div>

                </div>
            </div>


        @endforeach
    </div>
</body>
</html>

