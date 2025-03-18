<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwe gebruiker</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="w-full max-w-xs">
        <form method="POST" action="{{ route('store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Nummer
            </label>
            <input name="nummer" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Nummer" type="text" placeholder="Nummer">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Naam
            </label>
            <input name="naam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="naam" type="text" placeholder="naam">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Woonplaats
            </label>
            <input name="woonplaats" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="woonplaats" type="text" placeholder="woonplaats">
          </div>
          <div class="flex items-center justify-between">
            <input type="submit" value="Maak nieuwe gebruiker aan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          </div>
        </form>
        <a href="{{ route('index') }}">go back to all Gebruikers</a>

        <p class="text-center text-gray-500 text-xs">
          &copy;2021 Acme Corp. All rights reserved.
      </div>
</body>
</html>