<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementControl extends Controller
{

    

    public function index()
    {
        $Evenement = Evenement::all();
        return view('gestionEvenement', ['Evenement'=>$Evenement]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $e = Evenement::find($id);
        return view('Evenement.description', ['unEvenement'=>$e]);  
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
