<nav class="bg-blue-400">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x-mark

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-12 w-auto lg:hidden" src="{{asset('images/Healthcares2.0.png')}}" alt="Your Company">
                    <img class="hidden h-12 w-auto lg:block" src="{{asset('images/Healthcares2.0.png')}}" alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route("melding.index")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                        <a href="{{route("behandelaar.index")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Meldingen</a>

                        <a href="{{route("patients.index")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Patiënten</a>

                        <a href="{{route("afgerond.index")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Afgeronden Meldingen</a>

                        <a href="{{route("files.index")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dossiers</a>

                        <a href="{{route("melding.create")}}" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Maak Melding</a>

                    </div>
                </div>
            </div>

            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" name="submit" class="text-white hover:bg-blue-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Uitloggen</button>
            </form>

            <div class="relative ml-3">
                <div>
                    <button type="button" class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>
