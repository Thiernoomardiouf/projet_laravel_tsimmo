<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Agence;
use Symfony\Component\Console\Input\Input;

use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    public function index () {

        $proprietaires = Proprietaire::all();
        //dump($proprietaires);

        return view('proprietaire.indexproprietaires',[
            'proprietaires' => $proprietaires
        ]);
    }

    public function create() {
        $agences = Agence::all();
        return view('proprietaire.createProprietaire',[
            'agences' => $agences
        ]);
    }

    public function store(Request $request) {

        $proprietaire = new Proprietaire();

        $proprietaire->prenom = $request->prenom;
        $proprietaire->nom = $request->nom;
        $proprietaire->lieu_naissance = $request->lieu_naissance;   
        $proprietaire->contact = $request->contact;
        $proprietaire->civilite = $request->civilite;
        $proprietaire->nationnalite = $request->nationnalite;
        $proprietaire->cni = $request->cni;
        $proprietaire->adresse = $request->adresse;
        $proprietaire->agence_id = $request->agence_id;
        $proprietaire->date_naissance = $request->date_naissance;
        $proprietaire->save();

        return redirect()->route('proprietaire.index');
    }

    public function show(Proprietaire  $proprietaire){

        $villas = $proprietaire->villas();
        $immeubles = $proprietaire->immeubles();
        
        return view('proprietaire.biens',
         [
             'proprietaire' => $proprietaire,
              'villas' => $villas,
              'immeubles' => $immeubles
            ]);

    }
}
