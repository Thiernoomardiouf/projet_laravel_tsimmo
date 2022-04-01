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

        return view('proprietaire.index',[
            'proprietaires' => $proprietaires
        ]);
    }

    public function create() {
        $agences = Agence::all();
        return view('proprietaire.create',[
            'agences' => $agences
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Proprietaire::create($inputsData);
        return redirect()->route('proprietaire.index');
    }

    public function show(Proprietaire  $proprietaire){
        return view('proprietaire.show',['proprietaire' => $proprietaire]);

    }
}
