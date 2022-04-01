<?php

namespace App\Http\Controllers;
use App\Models\Villa;

use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index () {

        $villas = Villa::all();

        return view('biens.index',[
            'villas' => $villas
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Villa::create($inputsData);
        return redirect()->route('biens.index');
    }
}
