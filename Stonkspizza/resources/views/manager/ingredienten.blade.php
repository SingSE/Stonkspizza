<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ingredienten beheren</title>
</head>
<body class="bg-yellow-50">
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
        </div>
    </header>

    <tbody>
        <table class="table text-black">
            <thead>
              <tr>
                <th>Ingredient</th>
                <th>Eenheid</th>
                <th>Prijs</th>
                <th>Id</th>
              </tr>
            </thead>
              <tbody>
                @foreach ($ingredients as $ingredient)
                    @foreach ($ingredient->units as $unit)
                    <tr>
                        <td class="px-4 py-3">
                            {{ $ingredient->name}}
                        </td>
                        <td class="px-4 py-3">
                            {{ $unit->name }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $ingredient->price }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $ingredient->id }}
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ url('ingredienten/' . $ingredient->id . '/edit') }}" class="bg-blue-600 hover:bg-blue-300 text-yellow-50 py-1 px-1 m-3 rounded">Pas ingredient aan</a>
                            <form action="{{ url('ingredienten/' . $ingredienten->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 hover:bg-red-500 text-yellow-50 py-1 px-1 m-3 rounded">Verwijder ingredient</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        <button class="bg-green-800 text-yellow-50 py-1 px-1 m-3 rounded">
            <a href="ingredienten/create">Voeg nieuw ingredient toe</a>
        </button>
    </tbody>
</body>
</html>
