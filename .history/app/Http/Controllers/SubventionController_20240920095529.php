<?php

namespace App\Http\Controllers;

use App\Models\Subvention;
use Illuminate\Http\Request;

class SubventionController extends Controller
{
    public function create()
    {
        return view('subventions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_complet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type_agriculture' => 'required|string',
            'description_projet' => 'required|string',
            'montant_demande' => 'required|numeric',
        ]);

        Subvention::create($request->all());

        return redirect()->back()->with('success', 'Demande de subvention envoyée avec succès.');
    }
}
