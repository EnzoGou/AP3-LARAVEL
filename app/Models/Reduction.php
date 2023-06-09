<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reduction extends Model
{
    use HasFactory;
    protected $table = "Reduction";
    protected $primaryKey = "idReduct";
    public $timestamps = false;

    protected $fillable = ['idReduct', 'age', 'txReduction', 'idTarif'];
}
