<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $table = "Seance";
    protected $primaryKey = "idSeance";
    public $timestamps = false;

    protected $fillable = ['idSeance', 'dateSeance', 'heureDebut', 'heureFin', 'objectifSpecifique', 'idCat'];
}
