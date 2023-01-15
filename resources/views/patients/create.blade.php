
@vite(['resources/css/app.css'])
<body class="bg-accent-dark   bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">
<div class="gap-8 columns-2">
    <div class="">

{{--            <div class="card-body">--}}
{{--                <a href="{{route('patients.index')}}" class="btn btn-success btn-sm" >--}}
{{--                    Go back--}}
{{--                </a>--}}
{{--            </div>--}}

            @if(Session::get('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
                </div>
            @endif
            <form action="{{route('patients.store')}}" method="POST">
                <hr>

                @if(Session::get('succes'))
                    <div class="alert alert-success">
                        {{Session::get('succes')}}
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif


                @csrf

                <div>
                    <input id="user_id"
                           type="hidden"
                           name="user_id"
                           value="{{auth()->id()}}"/>
                    @error('user_id')
                    <span>{{$message}}</span>
                    @enderror
                </div>

                <div class="">
                    <label class=" px-2  font-semibold  text-l font-medium text-gray-900 dark:text-blue-500">Patiënt nummer</label>
                    <input id="number"
                           type="text"
                           name="number"
                           placeholder="number"
                           class="@error('number')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('number') }}"/>
                    @error('number')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Score</label>
                    <input id="score"
                           type="text"
                           name="score"
                           placeholder="score"
                           class="@error('score')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('score') }}"/>
                    @error('score')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" px-2  font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Leeftijd</label>
                    <input id="age"
                           type="text"
                           name="age"
                           placeholder="age"
                           class="@error('age')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('age') }}"/>
                    @error('age')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <div class="">
                    <label class=" px-2  font-semibold   text-l font-medium text-gray-900 dark:text-blue-500">Geslacht</label>
                    <input id="gender"
                           type="text"
                           name="gender"
                           placeholder="gender"
                           class="@error('gender')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('gender') }}"/>
                    @error('gender')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>



                <div class="">
                    <label class="px-2  font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Mentale gezondheid</label>
                    <input id="mental_health"
                           type="text"
                           name="mental_health"
                           placeholder="mental health"
                           class="@error('mental_health')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('mental_health') }}"/>
                    @error('mental_health')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Extra hulp</label>
                    <input id="extra_support"
                           type="text"
                           name="extra_support"
                           placeholder="extra support"
                           class="@error('extra_support')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('extra_support') }}"/>
                    @error('extra_support')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <div class="">
                    <label class=" px-2  font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Afdeling</label>
                    <input id="department"
                           type="text"
                           name="department"
                           placeholder="department"
                           class="@error('department')is-invalid @enderror bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ old ('department') }}"/>
                    @error('department')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>



                <div class="mb-6">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Opmerking</label>
                    <input id="remark"
                           type="text"
                           name="remark"
                           placeholder="remark"

                           class="@error('remark')is-invalid @enderror   bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block  w-full sm:w-64 h-64 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{ old ('remark') }}"/>
                    @error('remark')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>



    <form method="POST" action="">
        <div class="px-2">
            <button type="submit" class=" px-6 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Toevoegen</button>
        </div>
    </form>


</form>
    </div>
</div>





</body>

