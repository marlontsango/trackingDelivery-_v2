<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{

    public function CheckDelivery(Request $request) {
        $client = Clients::with('deliverys')->where('code',$request->code)->first();
        return view('Clients.checkDelivery', compact('client'));
    }


    public function Acceuil(){
        return view('Clients.acceuil');
    }

    public function Services(){
        return view('Clients.services');
    }

    public function Contacts(){

        return view('Clients.contacts');

    }


}
