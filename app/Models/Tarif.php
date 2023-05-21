<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $table = "Tarif";
    protected $primaryKey = "idTarif";
    public $timestamps = false;

    protected $fillable = ['idTarif','tarifDeBase','idEv'];
}
