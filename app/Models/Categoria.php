<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //para la asignacion masiva
    //protected $fillable = ['nombre', 'descripcion'];
    //tambien se puede hacer asi
    protected $guarded = [];


    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
