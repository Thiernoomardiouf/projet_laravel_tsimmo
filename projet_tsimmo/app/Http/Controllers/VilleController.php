<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;

class VilleController extends Controller
{
    public function index () {

        $villes = Ville::all();

        return view('biens.index',[
            'villes' => $villes
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Ville::create($inputsData);
        return redirect()->route('biens.index');
    }
}
