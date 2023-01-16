@vite(['resources/css/app.css'])

<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">

<div class=" rounded overflow-hidden shadow-lg m-2 border-4 border-blue-600 items-center ">

    <div class="     px-32 py-32 items-center ">
        <div>
            <a      href="{{route('patients.index', $patient->id)}}"><button class=" items center text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >Ga terug</button> </a>
        </div>

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


        <div
            class=" py-6 px-6 float-right object-top  rounded overflow-hidden shadow-lg m-2 border-2 border-blue-600 items-center">

            <h4 class="text-m font-semibold ">Score</h4>

            {{$patient-> score}}
        </div>

        <h2 class="text-2xl font-semibold">Patiëntnummer</h2>
        <div>
            {{$patient-> number}}
        </div>


        {{--                <h4 class="text-m font-semibold">Leeftijd</h4>--}}
        {{--                <div>--}}
        {{--                    {{$patient-> age}}--}}
        {{--                </div>--}}

        {{--                <h4 class="text-m font-semibold">Geslacht</h4>--}}
        {{--                <div>--}}
        {{--                    {{$patient-> gender}}--}}
        {{--                </div>--}}

        {{--                <h4 class="text-m font-semibold">Mentale gezondheid</h4>--}}
        {{--                <div>--}}
        {{--                    {{$patient-> mental_health}}--}}
        {{--                </div>--}}

        {{--                <h4 class="text-m font-semibold">Extra hulp</h4>--}}
        {{--                <div>--}}
        {{--                    {{$patient-> extra_support}}--}}
        {{--                </div>--}}


        <h4 class="text-m font-semibold">Afdeling</h4>
        <div>
            {{$patient-> department}}
        </div>

        {{--                <h4 class="text-m font-semibold">Opmerking</h4>--}}
        {{--                <div>--}}
        {{--                    {{$patient-> remark}}--}}
        {{--                </div>--}}


        <div>


            <a href="{{route('files.show', $patient->id)}}">
                <button
                    class="  text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                    </svg>
                    Bekijk Dossier
                </button>
            </a>
        </div>



    </div>

</div>
</div>

</body>
