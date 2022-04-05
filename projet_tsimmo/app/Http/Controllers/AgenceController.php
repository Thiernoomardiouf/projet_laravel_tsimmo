<?php

namespace App\Http\Controllers;
use App\Models\Agence;

use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index () {

        $agences = Agence::all();

        return view('proprietaire.index',[
            'agences' => $agences
        ]);
    }

    public function create() {

        return view('proprietaire.createAgence');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Agence::create($inputsData);
        return redirect()->route('proprietaires.index');
    }
}
