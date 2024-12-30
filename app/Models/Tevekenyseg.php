<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tevekenyseg extends Model
{
    protected $primaryKey = 'tevekenyseg_id';
    protected $fillable = [
       
        'tevekenyseg_nev',
        'pontszam'
       
    ];
}
