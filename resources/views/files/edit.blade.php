
@vite(['resources/css/app.css'])
<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">

<div class="gap-8 columns-2">

            @if(Session::get('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
                </div>
            @endif

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
            <form action="{{route('files.update', $file->id )}}" method="POST">
                <hr>
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Patiëntnummer</label>
                    <input id="number"
                           type="text"
                           name="number"
                           placeholder=""
                           class="@error('number')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> number }}"/>
                    @error('number')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Score</label>
                    <input id="score"
                           type="text"
                           name="score"
                           placeholder=""
                           class="@error('score')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> score }}"/>
                    @error('score')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Leeftijd</label>
                    <input id="age"
                           type="text"
                           name="age"
                           placeholder=""
                           class="@error('age')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> age }}"/>
                    @error('age')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Geslacht</label>
                    <input id="gender"
                           type="text"
                           name="gender"
                           placeholder=""
                           class="@error('gender')is-invalid @enderror form-controlbg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> gender }}"/>
                    @error('age')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Mentale gezondheid</label>
                    <input id="mental_health"
                           type="text"
                           name="mental_health"
                           placeholder=""
                           class="@error('mental_health')is-invalid @enderror form-controlbg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> mental_health }}"/>
                    @error('mental_health')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Extra hulp</label>
                    <input id="extra_support"
                           type="text"
                           name="extra_support"
                           placeholder=""
                           class="@error('extra_support')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> extra_support }}"/>
                    @error('extra_support')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Afdeling</label>
                    <input id="department"
                           type="text"
                           name="department"
                           placeholder=""
                           class="@error('department')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 block w-full sm:w-80 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> department }}"/>
                    @error('department')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class=" px-2 font-semibold    text-l font-medium text-gray-900 dark:text-blue-500">Opmerking</label>
                    <input id="remark"
                           type="text"
                           name="remark"
                           placeholder=""
                           class="@error('remark')is-invalid @enderror form-control bg-gray-50 border border-blue-500 text-gray-900 text-l rounded-lg focus:ring-blue-500 focus:border-gray-500 text-left block w-full sm:w-64 h-64 dark:bg-gray-300 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"

                           value="{{ $file-> remark }}"/>
                    @error('remark')
                    <span class="" style="color: red">{{ $message }}</span>
                    @enderror
                </div>







                <form method="POST" action="">
                    <div class="px-2">
                        <button action="{{route('files.update', $file->id)}}" type="submit"
                                class=" px-6 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Update
                        </button>
                    </div>
                </form>


            </form>
        </div>
</div>

</body>
