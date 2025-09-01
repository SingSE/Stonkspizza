<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pas medewerker aan</title>
</head>
<body>
    <form action="{{ url('medewerkers/' . $medewerker->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" value=" {{ $medewerker->voornaam }} " placeholder="voornaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" value=" {{ $medewerker->achternaam }} " placeholder="achternaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="adres">Adres</label>
            <input type="text" id="adres" name="adres" value=" {{ $medewerker->adres }} " placeholder="adres" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="telefoonnummer">Telefoonnummer</label>
            <input type="number" id="telefoonnummer" name="telefoonnummer" value="{{ $medewerker->telefoonnummer }}" placeholder="telefoonnummer" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="stad">Stad</label>
            <input type="text" id="stad" name="stad" value=" {{ $medewerker->stad }} " placeholder="stad" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="burger_service_nummer">BSN</label>
            <input type="text" id="burger_service_nummer" name="burger_service_nummer" value=" {{ $medewerker->burger_service_nummer }} " placeholder="bsn" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
        <div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 m-3 rounded">Aanpassen</button>
        </div>
    </form>
</body>
</html>