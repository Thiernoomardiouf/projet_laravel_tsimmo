<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;

class VilleController extends Controller
{
    public function index () {

        $villes = Ville::all();

        return view('proprietaire.index',[
            'villes' => $villes
        ]);
    }

    public function create() {

        return view('proprietaire.lieux');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Ville::create($inputsData);
       return redirect()->route('proprietaires.index');
    }
}
