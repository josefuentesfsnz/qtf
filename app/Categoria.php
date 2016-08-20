<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use SoftDeletes;
    protected $table='categoria';
    protected $fillable = ['id', 'name'];
    protected $dates = ['deleted_at'];
}
