<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $table = "Absence";
    protected $primaryKey = "idAbs";
    public $timestamps = false;

    protected $fillable = ['dateDeb', 'dateFin', 'idAd'];
}
