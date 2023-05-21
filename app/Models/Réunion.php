<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Réunion extends Model
{
    use HasFactory;
    protected $table = "Réunion";
    protected $primaryKey = "idReu";
    public $timestamps = false;

    protected $fillable = ['idReu', 'sujet', 'dateReunion'];
}
