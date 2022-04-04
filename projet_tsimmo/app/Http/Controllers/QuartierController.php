<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartier;
use App\Models\Commune;
use App\Models\Ville;

class QuartierController extends Controller
{
    public function index () {

        $quartiers = Quartier::all();

        return view('proprietaire.index',[
            'quartiers' => $quartiers
        ]);
    }

    public function create() {
        $communes = Commune::all();
        $villes = Ville::all();

        return view('proprietaire.lieux',[
            'communes' => $communes,
            'villes' => $villes
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Quartier::create($inputsData);
         return redirect()->route('proprietaires.index');
    }
}
