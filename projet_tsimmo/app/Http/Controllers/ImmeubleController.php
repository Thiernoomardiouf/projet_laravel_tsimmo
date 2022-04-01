<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immeuble;

class ImmeubleController extends Controller
{
    public function index () {

        $immeubles = Immeuble::all();

        return view('biens.index',[
            'immeubles' => $immeubles
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Immeuble::create($inputsData);
        return redirect()->route('biens.index');
    }
}
