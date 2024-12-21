<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class BejegyzesekController extends Controller
{
    public function index(){
        return Bejegyzesek::all();
       
    }

    public function show($id){
        return Bejegyzesek::find($id);
    }

    public function postBejegyzes(Request $request){
        $bejegyzes=new Bejegyzesek();
        $bejegyzes->tevekenyseg_id=$request->tevekenyseg_id;
        $bejegyzes->osztaly_nev=$request->osztaly_nev;
        $bejegyzes->allapot=$request->allapot;

        $bejegyzes->save();
    }
}
