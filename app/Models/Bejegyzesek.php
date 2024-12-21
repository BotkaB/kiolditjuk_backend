<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bejegyzesek extends Model
{
    protected $fillable = [
       
        'tevekenyseg_id',
        'osztaly_nev',
        'allapot'
       
    ]; //

    
}
