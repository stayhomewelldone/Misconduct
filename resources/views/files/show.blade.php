@vite(['resources/css/app.css'])

<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">

<div class=" rounded overflow-hidden shadow-lg m-2 border-4 border-blue-600 items-center ">
    <div class="     px-32 py32 items-center " >



        <hr >

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

        <div class="  py-6 px-6 float-right object-top max-w-md rounded overflow-hidden shadow-lg m-2 border-2 border-blue-600 items-center">

            <h4 class="text-m font-semibold ">Score</h4>

            {{$file-> score}}
        </div>


        <h2 class="text-2xl font-semibold">Patiëntnummer</h2>
        <div >
            {{$file-> number}}
        </div>





        <h4 class="text-m font-semibold">Leeftijd</h4>
        <div>
            {{$file-> age}}
        </div>

        <h4 class="text-m font-semibold">Geslacht</h4>
        <div>
            {{$file-> gender}}
        </div>

                        <h4 class="text-m font-semibold">Mentale gezondheid</h4>
                        <div>
                            {{$file-> mental_health}}
                        </div>

                        <h4 class="text-m font-semibold">Extra hulp</h4>
                        <div>
                            {{$file-> extra_support}}
                        </div>



        <h4 class="text-m font-semibold">Afdeling</h4>
        <div>
            {{$file-> department}}
        </div>

                        <h4 class="text-m font-semibold">Opmerking</h4>
                        <div>
                            {{$file-> remark}}
                        </div>
        <div>
            <a      href="{{route('files.index', $file->id)}}"><button class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >Bekijk Alle Dossiers</button> </a>
        </div>

        <div>
            <a      href="{{route('files.edit', $file->id)}}"><button class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >Bewerk Dossier</button> </a>
        </div>

        <div>
            <a      href="{{route('patients.show', $file->id)}}"><button class=" bottom text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >Ga terug</button> </a>
        </div>
    </div>
</div>
</div>

</body>
