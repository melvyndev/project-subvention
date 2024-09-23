<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mettre à jour Subvention')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-12">
        <header class="bg-gray-800 p-4 text-white mb-8">
            <h2 class="text-xl font-semibold">{{ __('Update') }} Subvention</h2>
        </header>

        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Update') }} Subvention</h1>
                            <p class="mt-2 text-sm text-gray-700">Mettre à jour une {{ __('Subvention') }} existante.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{ route('subventions.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Retour</a>
                        </div>
                    </div>

                    <div class="mt-8 overflow-x-auto">
                        <div class="max-w-xl py-2 align-middle">
                            <form method="POST" action="{{ route('subventions.update', $subvention->id) }}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                @include('subvention.form')
                                <button type="submit" class="mt-4 rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
