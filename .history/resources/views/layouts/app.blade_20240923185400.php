<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demande de Subvention Agricole')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        .nav-link {
            padding: 0.5rem 1rem; /* Ajout d'un peu de padding */
            border-radius: 0.375rem; /* Coins arrondis */
            transition: background-color 0.3s; /* Transition pour l'effet de survol */
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Changement de fond au survol */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4">
        <header class="bg-green-500 text-white p-6 rounded-md mb-8">
            <h1 class="text-2xl font-bold">Formulaire de subvention agricole</h1>
            <nav class="mt-4">
                <a href="{{ route('subventions.index') }}" class="nav-link text-white hover:underline mr-4">Liste des subventions</a>
                <a href="{{ route('subventions.create') }}" class="nav-link text-white hover:underline">Nouveau formulaire</a>
            </nav>
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
