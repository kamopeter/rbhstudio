<?php

namespace App\Http\Controllers;

use App\Models\Proba;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProbaController extends Controller
{
    public function crypt(Request $request){
        $name = $request->input('name');
        echo '<br>';
        $crypted = Crypt::encryptString($name);
        echo $crypted;
        session()->put('name', $crypted);
        $store = new Proba;
        $store->name = $crypted;
        $store->save();
        return view('log');
    }

    public function decrypt(Request $request){
        $data = Proba::where('id',1)->get();
        $array = json_decode($data, true);
        echo $array[0]['name'];
        $name_in = $request->input('name');
        //$ses = session()->get('name');
        $crypt = Crypt::decryptString($array[0]['name']);
        if( $name_in === $crypt) {
            return view('welcome');
        }
        else {
            echo 'Hiba';
        }
    }
}
