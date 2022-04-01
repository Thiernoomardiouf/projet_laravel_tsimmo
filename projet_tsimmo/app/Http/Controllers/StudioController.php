<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;

class StudioController extends Controller
{
    public function index () {

        $studios = Studio::all();

        return view('biens.index',[
            'studios' => $studios
        ]);
    }

    public function create() {

        return view('biens.create');
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Studio::create($inputsData);
        return redirect()->route('biens.index');
    }
}
