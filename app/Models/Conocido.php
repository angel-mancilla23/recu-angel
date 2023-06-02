<?php

namespace App\Models;
use App\Models\Conocido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocido extends Model
{
    use HasFactory;
    protected $table = 'conocidos';

    protected $fillable = [
        'name',
        'usuario',
        'clave',



    ];

    public function conocidos(){




    }

}
