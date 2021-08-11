<x-guest-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wirtualna biblioteka</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="bg-cover bg-no-repeat bg-center antialiased" style="background-image: url('https://images.unsplash.com/photo-1554900773-632f4c042da8?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1vZGVybiUyMGxpYnJhcnl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80')" >
    <div class=" flex items-top justify-center  min-h-screen sm:items-center sm:pt-0"  >

        <div class="relative max-w-8xl mx-auto sm:px-6 lg:px-8">
            <h2 class=" text-7xl">
                WIRTUALNA BIBLIOTEKA
            </h2>

            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                    <div class="space-x-7 ">
                        <button class="ml-60 mt-12 w-36 h-16 bg-blue-500 hover:bg-blue-300 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        <a href="{{ route('login') }}"  class=" text-lg text-blue-900 hover:text-blue-700 visited:text-purple-600">Login</a>
                        </button>

                        @if (Route::has('register'))

                            <button class="w-36 h-16 bg-blue-500 hover:bg-blue-300 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                            <a href="{{ route('register') }}" class="text-lg text-blue-900 hover:text-blue-700 visited:text-purple-600">Register</a>
                            </button>
                    </div>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
</x-guest-layout>
