<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Maak nieuw ingredient aan</title>
</head>
<body class="bg-yellow-50">
    <form action="/ingredienten" method="POST" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        <label for="naam" class="block text-yellow-50 font-bold mb-2">
            Naam
        </label>
        <input type="text" name="naam" id="naam" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">

        <label for="prijs" class="block text-yellow-50 font-bold mt-5 mb2">
            Prijs
        </label>
        <input type="text" name="prijs" id="prijs" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">

        <label for="eenheid" class="block text-yellow-50 font-bold mt-5 mb-2">Eenheid</label>
        <select id="eenheid" name="eenheid" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">
            @foreach ($units as $unit)
                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Voeg nieuw ingredient toe" class="bg-green-800 text-yellow-50 py-2 px-4 mt-5 rounded">
    </form>

</body>
</html>
