<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appartement;

class AppartementController extends Controller
{
    public function index () {

        $appartements = Appartement::all();

        return view('proprietaire.appartements',[
            'appartements' => $appartements
        ]);
    }

    public function create() {

        return view('proprietaire.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Appartement::create($inputsData);
        return redirect()->route('proprietaire.appartement');
    }
}
