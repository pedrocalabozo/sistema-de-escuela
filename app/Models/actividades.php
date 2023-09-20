<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    use HasFactory;

protected $table="actividades";

    public function categorias() {
        return $this->belongsTo(categorias::class,'categoria_id');
    }
}
