<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>

            <nav class="space-x-4">
                <div>
                    @auth
                    <a href="/menu" class="font-semibold hover:text-orange-300">Menu</a>
                    <a href="{{ route('profile.edit') }}" class="font-semibold hover:text-orange-300 ml-1">Instellingen</a>
                    @endauth
                </div>
            </nav>
        </div>
    </header>

    <div class="flex items-center justify-center mt-10">
        <h2 class="text-4xl font-bold">Welkom</h2>
    </div>

    <div class="flex items-center justify-center mt-10">
        @if(auth()->check() && auth()->user()->role_id == '3')
        <a href="{{ route('medewerkers.index') }}" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300">Medewerkers beheren</a>

        @elseif(auth()->check() && auth()->user()->role_id == '2')
        <a href="/pizza" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300">Pizza's beheren</a>
        <a href="/ingredienten" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300 ml-3">Ingredienten beheren</a>

        @else
        <a href="/menu" class="font-semibold bg-orange-400 text-white rounded-full px-4 py-2 hover:text-orange-300">Menu</a>
        @endif
    </div>
</body>
</html>