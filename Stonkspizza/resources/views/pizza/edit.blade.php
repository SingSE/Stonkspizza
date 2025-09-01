<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Pas pizza aan</title>
</head>
<body class="bg-yellow-50">
    <form action="{{ url('pizza/' . $pizza->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-5">
            <label class="block text-yellow-50 font-bold mb-2" for="name">Pizza</label>
            <input type="text" id="name" name="name" value=" {{ $pizza->name }} " placeholder="name" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">
        </div>
        <div class="mb-5">
            <label class="block text-yellow-50 font-bold mb-2" for="beschrijving">Beschrijving</label>
            <textarea id="beschrijving" name="beschrijving" placeholder="beschrijving" class="border-black border rounded w-full py-2 px-3 bg-neutral-200 resize-y overflow-hidden">{{ $pizza->beschrijving }}</textarea>
        </div>
        <div class="mb-5">
            <label class="block text-yellow-50 font-bold mb-2" for="prijs">Prijs</label>
            <textarea id="prijs" name="prijs" placeholder="prijs" class="border-black border rounded w-full py-2 px-3 bg-neutral-200 resize-y overflow-hidden">{{ $pizza->prijs }}</textarea>
        </div>
              
        <div>
            <button type="submit" class="bg-green-800 text-yellow-50 py-2 px-4 rounded">Aanpassen</button>
        </div>
    </form>
</body>
</html>