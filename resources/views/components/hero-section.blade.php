<section
    style="background-image: url('./assert/hero.jpg');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height:100vh;"
     class="py-12 px-6"
    >
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-white hover:text-gray-400 transition-all ease-linear focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-white hover:text-gray-400 transition-all ease-linear focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>
                @endauth
            </div>
        @endif
        <div class="flex items-center justify-center flex-col w-full h-full bg-black bg-opacity-40">
            <div class="py-3 px-2 mt-4">
                <h1 class="md:text-5xl text-3xl font-light">CABEZA NETWORK COMPANY LIMITED</h1>
            </div>
            <div class="py-2 mt-2 text-center">
                <p class="font-light text-xl">
                    Cabeza network is an international company which rather than
                    dealing...
                </p>
                <button onclick="location.href='#about'"
                    class="mt-4 px-6 py-3 group hover:bg-gray-800 hover:border-gray-800 hover:text-white transition-all ease-in-out duration-300 border-2 border-orange-700 text-black rounded-full z-5">
                    Read More
                    <svg class="inline animate-bounce group-hover:fill-white transition-colors duration-300 delay-75"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>