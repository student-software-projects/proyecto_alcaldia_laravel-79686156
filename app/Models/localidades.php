<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localidades extends Model
{
    use HasFactory;
    protected $table='localidades';
    protected $primaryKey='id';
    protected $fillable=
        [
            'localidades'

        ];



}
