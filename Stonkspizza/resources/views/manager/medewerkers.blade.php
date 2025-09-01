<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Medewerkers beheren</title>
</head>
<body>
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                StonksPizza
            </div>
        </div>
    </header>

    <div class="container mx-auto p-4 overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Naam</th>
                    <th class="py-2 px-4 border-b">Achternaam</th>
                    <th class="py-2 px-4 border-b">Telefoonnummer</th>
                    <th class="py-2 px-4 border-b">Stad</th>
                    <th class="py-2 px-4 border-b">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medewerkers as $medewerker)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">{{ $medewerker->voornaam }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $medewerker->achternaam }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $medewerker->telefoonnummer }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $medewerker->stad }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{ url('medewerkers/' . $medewerker->id . '/edit') }}" class="bg-blue-600 hover:bg-blue-300 text-yellow-50 py-1 px-1 rounded">Pas medewerker aan</a>
                            <form action="{{ url('medewerkers/' . $medewerker->id) }}" method="post" class="inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-600 hover:bg-red-500 text-yellow-50 py-1 px-1 rounded">Verwijder Medewerker</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="bg-green-800 text-yellow-50 py-1 px-1 mt-3 rounded">
            <a href="medewerkers/create">Voeg nieuwe medewerker toe</a>
        </button>
    </div>

</body>
</html>