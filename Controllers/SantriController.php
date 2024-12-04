<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function datasantri(){
        $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
        $mhs2 = 'Komeng'; $asal2 = 'Depok';
        $mhs3 = 'Ahmeng'; $asal3 = 'Jombang';
        $mhs4 = 'Abdul'; $asal4 = 'Dumai';
        $mhs5 = 'Towek'; $asal5 = 'Papua';
        return view('data_santri',
            compact('mhs1','mhs2','mhs3','mhs4','mhs5','asal1','asal2','asal3','asal4','asal5')
          );
    }
}
