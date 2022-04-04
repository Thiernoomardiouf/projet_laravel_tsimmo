<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Immeuble;

class StudioController extends Controller
{
    public function index () {

        $studios = Studio::all();

        return view('proprietaire.studio',[
            'studios' => $studios
        ]);
    }

    public function create() {

        $immeubles = Immeuble::all();

        return view('proprietaire.createLocal',[
            'appartements' => $immeubles
        ]);
    }

    public function store(Request $request) {

        $inputsData = $request->all();

        Studio::create($inputsData);
        return redirect()->route('proprietaire.studio');
    }
}
