<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immeuble;
use App\Models\Proprietaire;
use App\Models\Quartier;

class ImmeubleController extends Controller
{
    public function index () {

        $immeubles = Immeuble::all();

        return view('proprietaire.immeuble',[
            'immeubles' => $immeubles
        ]);
    }

    public function create() {
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();

        return view('proprietaire.createImmeuble',[
            'proprietaires' => $proprietaires,
            'quartiers' => $quartiers
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Immeuble::create($inputsData);
        return redirect()->route('proprietaire.immeuble');
    }
}
