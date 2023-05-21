<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieAge extends Model
{
    use HasFactory;
    protected $table = "CategorieAge";
    protected $primaryKey = "idCat";
    public $timestamps = false;

    protected $fillable = ['idCat'];
}
