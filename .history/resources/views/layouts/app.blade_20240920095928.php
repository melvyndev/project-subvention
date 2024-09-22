<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demande de Subvention Agricole')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Inclure le CSS -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Inclure le JS si nécessaire -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulaire de subvention agricole</h1>
            <!-- Vous pouvez ajouter un menu de navigation ici -->
        </header>

        <main>
            @yield('content') <!-- Contenu principal -->
        </main>

        <footer>
            <p>&copy; 2024 Subventions Agricoles. Tous droits réservés.</p>
        </footer>
    </div>
</body>
</html>
