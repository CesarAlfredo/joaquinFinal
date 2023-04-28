<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre','vista','id_municipio','direccion','codigo_postal'];

}
