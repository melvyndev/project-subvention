@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulaire de demande de subvention agricole</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('subventions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom_complet">Nom complet :</label>
            <input type="text" name="nom_complet" id="nom_complet" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="type_organisation">Type d'organisation :</label>
            <select name="type_organisation" id="type_organisation" class="form-control" required>
                <option value="">-- Sélectionnez --</option>
                <option value="entreprise">Entreprise</option>
                <option value="cooperative">Coopérative</option>
                <option value="individuel">Individuel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description_beneficiaire">Description du bénéficiaire / organisation :</label>
            <textarea name="description_beneficiaire" id="description_beneficiaire" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="type_agriculture">Type d'agriculture :</label>
            <select name="type_agriculture" id="type_agriculture" class="form-control" required>
                <option value="">-- Sélectionnez --</option>
                <option value="céréalière">Céréalière</option>
                <option value="horticulture">Horticulture</option>
                <option value="élevage">Élevage</option>
            </select>
        </div>

        <!-- Champs dynamiques -->
        <div id="cereal_section" class="form-group" style="display: none;">
            <label for="surface_exploitation">Surface de l'exploitation (hectares) :</label>
            <input type="number" name="surface_exploitation" id="surface_exploitation" class="form-control">
        </div>

        <div id="horticulture_section" class="form-group" style="display: none;">
            <label for="type_plantes">Type de plantes cultivées :</label>
            <input type="text" name="type_plantes" id="type_plantes" class="form-control">
        </div>

        <div id="elevage_section" class="form-group" style="display: none;">
            <label for="nombre_animaux">Nombre d'animaux :</label>
            <input type="number" name="nombre_animaux" id="nombre_animaux" class="form-control">
        </div>

        <div class="form-group">
            <label for="description_projet">Description du projet :</label>
            <textarea name="description_projet" id="description_projet" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="montant_demande">Montant de la subvention demandée :</label>
            <input type="number" name="montant_demande" id="montant_demande" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="piece_identite">Joindre une pièce d'identité (PDF, JPG, PNG - max 2MB) :</label>
            <input type="file" name="piece_identite" id="piece_identite" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
    </form>
</div>

<script>
    document.getElementById('type_agriculture').addEventListener('change', function () {
        var type = this.value;
        document.getElementById('cereal_section').style.display = type === 'céréalière' ? 'block' : 'none';
        document.getElementById('horticulture_section').style.display = type === 'horticulture' ? 'block' : 'none';
        document.getElementById('elevage_section').style.display = type === 'élevage' ? 'block' : 'none';
    });
</script>
@endsection
