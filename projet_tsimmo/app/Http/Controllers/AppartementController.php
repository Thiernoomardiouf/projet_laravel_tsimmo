<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appartement;
use App\Models\Immeuble;

class AppartementController extends Controller
{
    public function index () {

        $appartements = Appartement::all();

        return view('proprietaire.appartements',[
            'appartements' => $appartements
        ]);
    }

    public function create() {

        $immeubles = Immeuble::all();

        return view('proprietaire.createLocal',[
            'appartements' => $immeubles
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Appartement::create($inputsData);
        return redirect()->route('proprietaire.appartement');
    }
}
