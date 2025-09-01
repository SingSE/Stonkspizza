<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/732b8d41cd.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Status van de bestelling</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="text-2xl font-bold">
                    StonksPizza
                </div>
                <nav class="space-x-4">
                    <div>
                        <a href="/menu" class="font-semibold hover:text-orange-300">Menu</a>

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300 ml-1">Account</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-orange-400 hover:text-orange-300 ml-1">Inloggen</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300 ml-1">Registreren</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </nav>
            </div>
    </header>

    <div class="flex items-center justify-center mt-10">
            <h2 class="text-3xl font-bold md:text-4xl lg:text-4xl">Status van je bestelling</h2>
    </div>
    @if ($statusid > 5)

    <div class="flex items-center justify-center mt-10">
        <div class="bg-red-600 p-8 rounded-md shadow-md flex flex-col items-center justify-center">
            <i class="fas fa-exclamation-triangle text-4xl"></i>
            <h1 class="text-2xl font-bold text-white">Je bestelling is geannuleerd</h1>
        </div>
    </div>

    @else
    <section class="flex flex-wrap lg:flex-nowrap mt-10">
        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/5 m-8 p-10 rounded-md shadow-md
        @if($statusid == 1) bg-orange-400 text-white @endif
        flex flex-col items-center justify-center">

            <i class="fa-solid fa-shop text-4xl"></i>
            <h1 class="text-2xl font-bold text-center">Besteld</h1>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/5 m-8 p-10 rounded-md shadow-md
        @if($statusid == 2) bg-orange-400 text-white @endif
        flex flex-col items-center justify-center">

            <i class="fa-solid fa-utensils text-4xl"></i>
            <h1 class="text-2xl font-bold text-center">Wordt bereid</h1>
        </div>


        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/5 m-8 p-10 rounded-md shadow-md
        @if($statusid == 3) bg-orange-400 text-white @endif
        flex flex-col items-center justify-center">

            <i class="fas fa-thermometer-three-quarters text-4xl"></i>
            <h1 class="text-2xl font-bold text-center">In de oven</h1>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/5 m-8 p-10 rounded-md shadow-md
        @if($statusid == 4) bg-orange-400 text-white @endif
        flex flex-col items-center justify-center">

            <i class="fa-solid fa-person-biking text-4xl"></i>
            <h1 class="text-2xl font-bold text-center">Is onderweg</h1>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/5 m-8 p-10 rounded-md shadow-md
        @if($statusid == 5) bg-orange-400 text-white @endif
        flex flex-col items-center justify-center">

            <i class="fa-solid fa-map-pin text-4xl"></i>
            <h1 class="text-2xl font-bold text-center">Bezorgd</h1>
        </div>
    </section>


    <div class="flex items-center justify-center m-8">
        <a href="{{ url('/status') }}" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300">Refresh</a>
        <form action="/cancel" method="post" class="ml-4">
            @csrf
            @method('PUT')
            <button type="submit" class="font-semibold bg-red-500 text-white rounded-full px-4 py-2 hover:text-red-300">Annuleren</button>
        </form>
    </div>

    @endif

</body>
</html>
