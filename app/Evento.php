<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Evento extends Model
{
    protected $table ='evento';
    protected $fillable = [
    'id', 
    'titulo', 
    'all_day', 
    'user_id', 
    'privacidad', 
    'lugar', 
    'cantidad_max', 
    'descripcion', 
    'categoria_id'];

}
