<?php

namespace App\Http\Controllers;
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
        return view('log');
    }

    public function decrypt(Request $request){
        $name_in = $request->input('name');
        $ses = session()->get('name');
        $crypt = Crypt::decryptString($ses);

        if( $name_in === $crypt) {
            return view('welcome');
        }
        else {
            echo 'Hiba';
        }
    }
}
