<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class BejegyzesekController extends Controller
{
    public function index(){
        $bejegyzesek=response()->json(Bejegyzesek::with('tevekenyseg')->get());
        return $bejegyzesek;
       
    }

    public function show($osztaly_nev){
       
        return Bejegyzesek::where("osztaly_nev", $osztaly_nev)->get();
    }
    

    public function postBejegyzes(Request $request){
        $bejegyzes=new Bejegyzesek();
        $bejegyzes->tevekenyseg_id=$request->tevekenyseg_id;
        $bejegyzes->osztaly_nev=$request->osztaly_nev;
        $bejegyzes->allapot=$request->allapot;

        $bejegyzes->save();
    }

}
