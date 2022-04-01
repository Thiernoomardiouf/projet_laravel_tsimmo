<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;

class CommuneController extends Controller
{
    public function index () {

        $communes = Commune::all();

        return view('biens.index',[
            'communes' => $communes
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Commune::create($inputsData);
        return redirect()->route('biens.index');
    }
}
