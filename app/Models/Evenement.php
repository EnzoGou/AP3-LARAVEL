<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $table = "Evenement";
    protected $primaryKey = "idEv";
    public $timestamps = false;

    protected $fillable = ['idEv', 'description', 'dateEv', 'nbPlaces', 'nomEv', 'horaireEv', 'nomOrganisateur', 'lieu', 'idCat'];
}
