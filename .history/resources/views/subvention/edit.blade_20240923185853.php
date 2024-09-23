<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }} Subvention
        </h2>
    </x-slot>

    <div class="py-12">
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
</x-app-layout>
