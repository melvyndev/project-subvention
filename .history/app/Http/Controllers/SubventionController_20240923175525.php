<?php

namespace App\Http\Controllers;

use App\Models\Subvention;
use App\Http\Requests\SubventionRequest; // Use a form request for validation
use Cloudinary; // Assuming you're using Cloudinary for image uploads
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class SubventionController extends Controller
{
    public function store(SubventionRequest $request): RedirectResponse
    {
        // Créer une nouvelle subvention avec les données validées
        $subvention = Subvention::create($request->validated());

        // Vérification si une pièce d'identité a été téléchargée
        if ($request->hasFile('piece_identite')) {
            $file = $request->file('piece_identite');

            try {
                // Uploader la pièce d'identité sur Cloudinary
                $uploadResult = Cloudinary::upload($file->getRealPath());

                // Vérifier si l'upload a réussi et que l'URL est disponible
                if ($uploadResult && $uploadResult->getSecurePath()) {
                    $uploadedFileUrl = $uploadResult->getSecurePath();

                    // Enregistrer l'URL de la pièce d'identité dans la base de données
                    $subvention->piece_identite = $uploadedFileUrl;
                    $subvention->save();
                } else {
                    // Gérer les cas où l'upload a échoué
                    return Redirect::back()->withErrors(['file_upload' => 'L\'upload du fichier a échoué.']);
                }
            } catch (\Exception $e) {
                // Gérer l'exception en cas d'erreur pendant l'upload
                return Redirect::back()->withErrors(['file_upload' => 'Erreur lors de l\'upload: ' . $e->getMessage()]);
            }
        }

        // Retourner une réponse avec un message de succès
        return Redirect::back()->with('success', 'Demande de subvention envoyée avec succès.');
    }
}
