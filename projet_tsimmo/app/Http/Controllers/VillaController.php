<?php

namespace App\Http\Controllers;
use App\Models\Villa;
use App\Models\Proprietaire;
use App\Models\Quartier;

use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index () {

        $villas = Villa::all();

        return view('proprietaire.villa',[
            'villas' => $villas
        ]);
    }

    public function create() {

        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();

        return view('proprietaire.createVilla',[
            'proprietaires' => $proprietaires,
            'quartiers' => $quartiers
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Villa::create($inputsData);
        return redirect()->route('proprietaire.villa');
    }
}
