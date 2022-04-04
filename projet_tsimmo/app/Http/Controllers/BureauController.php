<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bureau;
use App\Models\Immeuble;

class BureauController extends Controller
{
    public function index () {

        $bureaus = Bureau::all();

        return view('proprietaire.bureau',[
            'bureaus' => $bureaus
        ]);
    }

    public function create() {
        $immeubles = Immeuble::all();

        return view('proprietaire.createLocal',[
            'immeubles' => $immeubles
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Bureau::create($inputsData);
        return redirect()->route('proprietaire.bureau');
    }
}
