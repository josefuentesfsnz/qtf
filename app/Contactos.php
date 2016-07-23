<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $table='contactos';
    protected $fillable = ['id','user_id', 'contacto_id'];
    protected $timestamps=false;
}
