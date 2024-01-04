<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class AuctionController extends Controller
{
    //

    public function auctiondados(Request $request){

        $firstname = $request-> fname;
        $lastname = $request-> lname;
        $email = $request-> email;
        $ID = $request-> ID;
        $codname = $request-> codname;
        $value = $request-> value;
        

        $auction = new Event ();
        $auction-> firstname = $firstname;
        $auction-> lastname = $lastname;
        $auction-> email = $email;
        $auction->codname = $codname;
        $auction-> value = $value;

        $auction->save();


    
        return redirect ('/') -> with("msg", "auction made successfuly");
    }
}
