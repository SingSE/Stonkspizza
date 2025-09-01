<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mandje</title>
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

    {{--<section class="flex flex-wrap lg:flex-nowrap">
        <div class="lg:w-2/3 md:w-full w-full bg-white m-10 p-10 rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-6">Jouw Bestelling</h1>
            @foreach($order as $item)
            <div>
                <h1 class="font-bold">{{ $item->name }}</h1>
                <div class="mt-4">
                    <label class="block text-black mb-2" for="grootte">Kies grootte van de pizza</label>
                <select id="grootte" name="grootte">
                    @foreach ($groottes as $grootte)
                      <option value="{{ $grootte->id }}">{{ $grootte->name }}</option>
                    @endforeach
                </select>
                <label class="block text-black mb-2 mt-4" for="ingredient">Extra ingredient</label>
                <select id="ingredient1" name="ingredient1" onchange="document.getElementById('ingredienteen').value = document.getElementById('ingredient1').value">
                    @foreach ($ingredienten as $ingredient)
                      <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>

                <label class="block text-black mb-2 mt-4" for="ingredient2">Verwijder ingredient</label>
                <select id="ingredient2" name="ingredient2" onchange="document.getElementById('ingredienttwee').value = document.getElementById('ingredient2').value">
                    @foreach ($ingredienten as $ingredient)
                      <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
                </div>
                <form action="{{ url('mandje/' . $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-600 hover:bg-red-500 text-yellow-50 py-2 px-4 mt-5 rounded-full">Verwijder van bestelling</button>
                </form>
            </div>
            @endforeach
        </div>

        <div class="w-full lg:w-1/3 md:w-full bg-slate-100 m-10 p-10 rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-6">Totaalprijs</h1>
            @if (isset($totaalprijs))
                <h1>€{{ number_format($totaalprijs, 2, ',', '.') }}</h1>
            @endif

            @if (!empty($ingredient) && !empty($grootte))
                <form action="mandje" method="post">
                    @csrf
                    <input type="hidden" name="ingredient1" id="ingredienteen" value="{{ $ingredient->id }}">
                    <input type="hidden" name="ingredient2" id="ingredienttwee" value="{{ $ingredient->id }}">
                    <input type="hidden" name="grootte" id="grootte" value="{{ $grootte->id }}">
                    <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-2 px-4 mt-5 mb-5 rounded-full">Bereken prijs</button>
                    <br>
                    <a href="{{ url('/status') }}" class="bg-orange-400 text-white rounded-full px-4 py-2 hover:bg-orange-300">Bestellen</a>
                </form>
            @else
                <p>U heeft nog geen pizzas geselecteerd.</p>
            @endif
            <br>
        </div>
    </section>--}}

        <form action="{{ url('/mandje') }}" method="post" class="flex flex-wrap lg:flex-nowrap">
            @csrf
            <div class="lg:w-2/3 md:w-full w-full bg-white m-10 p-10 rounded-md shadow-md">
                <h1 class="text-2xl font-bold mb-6">Jouw Bestelling</h1>
                <div class="flex flex-wrap gap-10">
                @foreach($order as $item)
                    <div class="mt-5">
                        <h1 class="font-bold">{{ $item->name }}</h1>
                        <div class="mt-4">
                            <label class="block text-black mb-2" for="grootte_{{ $item->id }}">Kies grootte van de pizza</label>
                            <select id="grootte_{{ $item->id }}" name="grootte_{{ $item->id }}" onchange="document.getElementById('Grootte').value = document.getElementById('grootte_{{ $item->id }}').value">
                                @foreach ($groottes as $grootte)
                                    <option value="{{ $grootte->id }}">{{ $grootte->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            <div class="w-full lg:w-1/3 md:w-full bg-slate-100 m-10 p-10 rounded-md shadow-md">
                <h1 class="text-2xl font-bold mb-6">Totaalprijs</h1>
                @if (isset($totaalprijs))
                    <h1>€{{ number_format($totaalprijs, 2, ',', '.') }}</h1>
                @endif

                @if (!empty($grootte))
                <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-2 px-4 mt-5 mb-5 rounded-full">Bereken prijs</button>
                <br>
            </form>

            <form action="/bestel" method="post">
            @csrf
                @foreach($order as $item)
                <input type="hidden" name="grootte_{{ $item->id }}" id="Grootte" value="{{ $grootte->id }}">
                <input type="hidden" name="pizza_id_{{ $item->id }}" id="pizza_id_{{ $item->id }}" value="{{ $item->id }}">
                @endforeach
                <button type="submit" class="bg-orange-400 hover:bg-orange-300 text-white py-2 px-4 rounded-full">Bestellen</button>
            </form>

            @else
            <p>U heeft nog geen pizzas geselecteerd.</p>
            @endif
            <br>
            </div>

</body>
</html>
