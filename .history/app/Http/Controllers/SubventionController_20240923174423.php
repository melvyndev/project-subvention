<?php

namespace App\Http\Controllers;

use App\Models\Subvention;
use Illuminate\Http\Request;
use App\Http\Requests\SubventionRequest;
use Cloudinary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class SubventionController extends Controller
{
    public function create()
    {
        return view('subventions.create');
    }

    public function store(SubventionRequest $request): RedirectResponse
    {
        // Créer une nouvelle subvention avec les données validées
        $subvention = Subvention::create($request->validated());

        // Vérification si une pièce d'identité a été téléchargée
        if ($request->hasFile('piece_identite')) {
            $file = $request->file('piece_identite');

            // Uploader la pièce d'identité sur Cloudinary
            $uploadedFileUrl = Cloudinary::upload($file->getRealPath())->getSecurePath();

            // Enregistrer l'URL de la pièce d'identité dans la base de données
            $subvention->piece_identite = $uploadedFileUrl;
            $subvention->save();
        }

        // Retourner une réponse avec un message de succès
        return Redirect::back()->with('success', 'Demande de subvention envoyée avec succès.');
    }
    
}
