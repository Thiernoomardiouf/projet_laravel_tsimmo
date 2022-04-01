<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bureau;

class BureauController extends Controller
{
    public function index () {

        $bureaus = Bureau::all();

        return view('biens.index',[
            'bureaus' => $bureaus
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Bureau::create($inputsData);
        return redirect()->route('biens.index');
    }
}
