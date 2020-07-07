<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = "contacto";
    protected $fillable = ['nombres' , 'apellidos' , 'email' , 'nfecha', 'imgperfil' ];
}
