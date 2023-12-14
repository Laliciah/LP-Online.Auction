<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function registerauction(Request $request){

        $art = $request-> art;
        $name = $request-> name;
        $price = $request-> price;
        

        $user = new Event ();
        $user-> art = $art;
        $user-> name = $name;
        $user-> price = $price;
        $user->save();

        return redirect('/')-> with ("msg", "art added successfuly");

    }
}
