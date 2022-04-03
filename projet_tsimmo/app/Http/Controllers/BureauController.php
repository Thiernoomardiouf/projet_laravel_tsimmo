<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bureau;

class BureauController extends Controller
{
    public function index () {

        $bureaus = Bureau::all();

        return view('proprietaire.bureau',[
            'bureaus' => $bureaus
        ]);
    }

    public function create() {

        return view('proprietaire.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Bureau::create($inputsData);
        return redirect()->route('proprietaire.bureau');
    }
}
