<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ingredient aanpassen</title>
</head>
<body class="bg-yellow-50">
    <form action="{{ url('ingredienten/' . $ingredient->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-yellow-50 font-bold mb-5" for="name">Naam</label>
            <input type="text" id="name" name="name" value=" {{ $ingredient->name }} " placeholder="naam" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label class="block text-yellow-50 font-bold mb-5" for="price">Prijs</label>
            <input type="number" id="price" name="price" value=" {{ $ingredient->price }} " placeholder="prijs" class="border-black border rounded w-full py-2 px-3 bg-neutral-200">
        </div>

        <div class="mb-4">
            <label class="block text-yellow-50 font-bold mb-5" for="unit">Eenheid</label>
        <select id="unit" name="unit">
            @foreach ($units as $unit)
              <option value="{{ $unit->id }}">{{ $unit->name }}</option>
            @endforeach
        </select>
        </div>
    
        <div>
            <button type="submit" class="bg-green-800 text-yellow-50 py-2 px-4 rounded">Aanpassen</button>
        </div>
    </form>
            
</body>
</html>