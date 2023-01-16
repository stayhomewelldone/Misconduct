
@vite(['resources/css/app.css'])
<body class="bg-accent-dark  bg-cover" style="background-image: url({{asset('images/MicrosoftTeams-image.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">

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
                <form action="{{route('patients.update', $patient->id )}}" method="POST">
                    <hr>
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="number" class="form-label">Land</label>
                        <input id="number"
                               type="text"
                               name="number"
                               placeholder=""
                               class="@error('number')is-invalid @enderror form-control"
                               value="{{ $patient-> number }}"/>
                        @error('number')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="name" class="form-label">Naam</label>
                        <input id="name"
                               type="text"
                               name="name"
                               placeholder=""
                               class="@error('name')is-invalid @enderror form-control"
                               value="{{ $patient-> name }}"/>
                        @error('name')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="age" class="form-label">Leeftijd</label>
                        <input id="age"
                               type="text"
                               name="age"
                               placeholder=""
                               class="@error('age')is-invalid @enderror form-control"
                               value="{{ $patient-> age }}"/>
                        @error('age')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="department" class="form-label">Afdeling</label>
                        <input id="department"
                               type="text"
                               name="department"
                               placeholder=""
                               class="@error('department')is-invalid @enderror form-control"
                               value="{{ $patient-> department }}"/>
                        @error('department')
                        <span class="" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>






                    <form method="POST" action="">
                        <div class="form-group">
                            <button action="{{route('patients.update', $patient->id)}}" type="submit"
                                    class="btn btn-primary btn-block"> Update
                            </button>
                        </div>
                    </form>


                </form>
            </div>
        </div>
    </div>
</body>
