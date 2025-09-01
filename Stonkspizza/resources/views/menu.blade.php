<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Menu</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>

            <nav class="space-x-4">
                <div>
                    @auth
                    <a href="/mandje" class="font-semibold hover:text-orange-300">Mandje</a>
                    @endauth

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

    <section class="relative">
        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Delicious Pizza" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="absolute inset-0 flex items-center justify-center ">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white">Ontdek de smaak van perfectie</h2>
        </div>
    </section>

    <section class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 m-10">
        @foreach($pizzas as $pizza)
        <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGl6emElMjB0b3AlMjBwb3Z8ZW58MHwwfDB8fHwy" alt="foto" class="w-full h-48 object-cover mb-4 rounded-md">
                <h2 class="text-xl font-bold mb-2">{{ $pizza->name }}</h2>
                <p class="text-gray-700">{{ $pizza->beschrijving }}</p>
                <p class="text-gray-700 font-bold mt-2">Prijs: €{{ number_format($pizza->prijs, 2, ',', '.') }}</p>

            @guest
            <button type="button" disabled class="bg-orange-400 text-white py-1 px-2 mt-2 rounded">Log in om toe te voegen aan je bestelling</button>
            @endguest

            @auth
            <form id="orderForm" action="/bestel" method="get">
                @csrf
                <input type="hidden" name="pizza_id" value="{{ $pizza->id }}">
                <button class="mt-4 bg-orange-400 hover:bg-orange-300 text-white px-4 py-2 rounded-full">Toevoegen aan bestelling</button>
            </form>
            @endauth

        </div>
        @endforeach
    </section>

    <footer class="bg-green-800 text-white p-4 text-center">
        <p>&copy; 2024 StonksPizza</p>
    </footer>

</body>
</html>
