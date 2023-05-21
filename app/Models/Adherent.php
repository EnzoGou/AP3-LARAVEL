<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;

    protected $table = "Adherent";
    protected $primaryKey = "idAd";
    public $timestamps = false;

    protected $fillable = ['nom', 'prenom', 'adresse', 'CP', 'ville', 'telephon', 'courriel', 'reservationPlace', 'idEv'];
    public function Personnel(){
        return $this-> hasOne('App\Models\Personnel','idAd');
    }
}
