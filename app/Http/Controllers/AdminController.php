<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function createDeliveryView()
    {
        $deliverys = Delivery::with('user_delivery')->get();
        $clients = Clients::all();
        //return json_encode($deliverys);
        return view('Admin.add_delivery', compact('deliverys', 'clients'));
    }
    //
    public function store(Request $request){


        $post1= DB::table('delivery')->insert([
                                                    'ville'=>$request->ville,
                                                    'heure_depart'=>$request->heure_depart,
                                                    'destination'=>$request->destination,
                                                    'heure_arrive'=>$request->heure_arrive,
                                                    'localisation'=>$request->localisation,
                                                    'status'=>$request->status,
                                                    'client_id'=>$request->codeClient,

                                                ]);

            return redirect()->back();

    }

    public function deliveryList(){


        $deliverys = Delivery::all();

        return view('admin', compact('deliverys'));
    }

    public function getDeliveryByCode($code){
        $deliverys = Delivery::with('user_delivery')->where('id', $code)->first();

        return response()->json($deliverys);
    }

    public function deleteDelivery($id)
    {

        $deliverys = DB::table('delivery')->where('id', $id)->get();
        return redirect()->back();
    }

     public function updateDelivery(Request $request){

         $data = [
             'ville'=>$request->ville,
             'heure_depart'=>$request->heure_depart,
             'destination'=>$request->destination,
             'heure_arrive'=>$request->heure_arrive,
             'localisation'=>$request->localisation,
             'status'=>$request->status,
         ];

         DB::table('delivery')->where('id',$request->id)->update($data);

         return redirect()->back();

     }

}
