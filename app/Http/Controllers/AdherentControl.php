<?php

namespace App\Http\Controllers;
//Import de la classe
use App\Models\Adherent;

class AdherentControl extends Controller
{
    public function getAdherent(){
        $Adherent = Adherent::all();
        return view('adherents.listeAdherents',['Adherent'=>$Adherent]);
        
    }
    
    public function index(){
        $Adherent = Adherent::all();
        return view('listeAdherent', ['Adherent'=>$Adherent]);
    }
}
