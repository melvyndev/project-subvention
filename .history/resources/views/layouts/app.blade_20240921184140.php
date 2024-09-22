<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demande de Subvention Agricole')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4">
        <header class="bg-green-500 text-white p-6 rounded-md mb-8">
            <h1 class="text-2xl font-bold">Formulaire de subvention agricole</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white p-4 text-center mt-8">
            <p>&copy; 2024 Subventions Agricoles. Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>
