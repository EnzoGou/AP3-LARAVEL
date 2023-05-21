<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $table = "Personnel";
    protected $primaryKey = "idPersonnel";
    public $timestamps = false;

    protected $fillable = ['idPersonnel', 'Specialite', 'Remplacement', 'dernierDiplome', 'nbAnneeExperience', 'idEv', 'idAd'];
    public function Adherent(){
        return $this-> hasOne('User','idAd');
    }
    
}
