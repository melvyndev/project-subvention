<div class="space-y-6">
    
    <div>
        <x-input-label for="nom_complet" :value="__('Nom Complet')"/>
        <x-text-input id="nom_complet" name="nom_complet" type="text" class="mt-1 block w-full" :value="old('nom_complet', $subvention?->nom_complet)" autocomplete="nom_complet" placeholder="Nom Complet"/>
        <x-input-error class="mt-2" :messages="$errors->get('nom_complet')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $subvention?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="type_agriculture" :value="__('Type Agriculture')"/>
        <x-text-input id="type_agriculture" name="type_agriculture" type="text" class="mt-1 block w-full" :value="old('type_agriculture', $subvention?->type_agriculture)" autocomplete="type_agriculture" placeholder="Type Agriculture"/>
        <x-input-error class="mt-2" :messages="$errors->get('type_agriculture')"/>
    </div>
    <div>
        <x-input-label for="description_projet" :value="__('Description Projet')"/>
        <x-text-input id="description_projet" name="description_projet" type="text" class="mt-1 block w-full" :value="old('description_projet', $subvention?->description_projet)" autocomplete="description_projet" placeholder="Description Projet"/>
        <x-input-error class="mt-2" :messages="$errors->get('description_projet')"/>
    </div>
    <div>
        <x-input-label for="montant_demande" :value="__('Montant Demande')"/>
        <x-text-input id="montant_demande" name="montant_demande" type="text" class="mt-1 block w-full" :value="old('montant_demande', $subvention?->montant_demande)" autocomplete="montant_demande" placeholder="Montant Demande"/>
        <x-input-error class="mt-2" :messages="$errors->get('montant_demande')"/>
    </div>
    <div>
        <x-input-label for="telephone" :value="__('Telephone')"/>
        <x-text-input id="telephone" name="telephone" type="text" class="mt-1 block w-full" :value="old('telephone', $subvention?->telephone)" autocomplete="telephone" placeholder="Telephone"/>
        <x-input-error class="mt-2" :messages="$errors->get('telephone')"/>
    </div>
    <div>
        <x-input-label for="adresse" :value="__('Adresse')"/>
        <x-text-input id="adresse" name="adresse" type="text" class="mt-1 block w-full" :value="old('adresse', $subvention?->adresse)" autocomplete="adresse" placeholder="Adresse"/>
        <x-input-error class="mt-2" :messages="$errors->get('adresse')"/>
    </div>
    <div>
        <x-input-label for="type_organisation" :value="__('Type Organisation')"/>
        <x-text-input id="type_organisation" name="type_organisation" type="text" class="mt-1 block w-full" :value="old('type_organisation', $subvention?->type_organisation)" autocomplete="type_organisation" placeholder="Type Organisation"/>
        <x-input-error class="mt-2" :messages="$errors->get('type_organisation')"/>
    </div>
    <div>
        <x-input-label for="surface_exploitation" :value="__('Surface Exploitation')"/>
        <x-text-input id="surface_exploitation" name="surface_exploitation" type="text" class="mt-1 block w-full" :value="old('surface_exploitation', $subvention?->surface_exploitation)" autocomplete="surface_exploitation" placeholder="Surface Exploitation"/>
        <x-input-error class="mt-2" :messages="$errors->get('surface_exploitation')"/>
    </div>
    <div>
        <x-input-label for="type_plantes" :value="__('Type Plantes')"/>
        <x-text-input id="type_plantes" name="type_plantes" type="text" class="mt-1 block w-full" :value="old('type_plantes', $subvention?->type_plantes)" autocomplete="type_plantes" placeholder="Type Plantes"/>
        <x-input-error class="mt-2" :messages="$errors->get('type_plantes')"/>
    </div>
    <div>
        <x-input-label for="nombre_animaux" :value="__('Nombre Animaux')"/>
        <x-text-input id="nombre_animaux" name="nombre_animaux" type="text" class="mt-1 block w-full" :value="old('nombre_animaux', $subvention?->nombre_animaux)" autocomplete="nombre_animaux" placeholder="Nombre Animaux"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre_animaux')"/>
    </div>
    <div>
        <x-input-label for="piece_identite" :value="__('Piece Identite')"/>
        <x-text-input id="piece_identite" name="piece_identite" type="text" class="mt-1 block w-full" :value="old('piece_identite', $subvention?->piece_identite)" autocomplete="piece_identite" placeholder="Piece Identite"/>
        <x-input-error class="mt-2" :messages="$errors->get('piece_identite')"/>
    </div>
    <div>
        <x-input-label for="description_beneficiaire" :value="__('Description Beneficiaire')"/>
        <x-text-input id="description_beneficiaire" name="description_beneficiaire" type="text" class="mt-1 block w-full" :value="old('description_beneficiaire', $subvention?->description_beneficiaire)" autocomplete="description_beneficiaire" placeholder="Description Beneficiaire"/>
        <x-input-error class="mt-2" :messages="$errors->get('description_beneficiaire')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>