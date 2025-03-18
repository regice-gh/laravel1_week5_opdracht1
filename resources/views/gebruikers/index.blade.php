<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gebruikers</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <h1 class="text-3xl font-bold">Gebruikers Overzicht</h1>
            <a href="{{ url('/gebruikers/create') }}" class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">Maak nieuw gebruiker</a>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($data as $gebruiker)
                <div class="bg-white shadow rounded p-6">
                    <h2 class="text-xl font-semibold mb-3">Gebruiker: {{ $gebruiker->naam }}</h2>
                    <p><strong>Nummer:</strong> {{ $gebruiker->nummer }}</p>
                    <p><strong>Woonplaats:</strong> {{ Str::upper($gebruiker->woonplaats) }}</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            &copy;2025 Acme Corp. All rights reserved.
        </div>
    </footer>
</body>
</html>