<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;
use App\Models\Ville;

class CommuneController extends Controller
{
    public function index () {

        $communes = Commune::all();

        return view('proprietaire.index',[
            'communes' => $communes
        ]);
    }

    public function create() {
        $villes = Ville::all();

        return view('proprietaire.lieux',[
            'villes' => $villes
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Commune::create($inputsData);
        return redirect()->route('proprietaires.index');
    }
}
