<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-cyan-950">
    <div id="container" class="text-center max-w-screen-xl mx-auto">
        <h1 class="text-4xl font-bold text-lime-500">{{ config('app.name') }}</h1>
        <p class="mt-4 text-lg text-pink-500">Página Home</p>
        <p><a href="/sobre" class="mt-4 text-md text-pink-300">Sobre</a></p>
    </div>
</body>
</html>