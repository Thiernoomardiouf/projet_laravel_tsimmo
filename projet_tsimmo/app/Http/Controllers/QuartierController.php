<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartier;

class QuartierController extends Controller
{
    public function index () {

        $quartiers = Quartier::all();

        return view('biens.index',[
            'quartiers' => $quartiers
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Quartier::create($inputsData);
        return redirect()->route('biens.index');
    }
}
