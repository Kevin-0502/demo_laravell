<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table='autores';
    protected $fillable=['id_genero','nombre_genero','descripcion'];
    
}
