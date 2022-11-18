<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function Home(){

        $clients = Clients::all();
        return view('Admin.add_client', compact('clients'));

    }

    public function getClient(){

        $evaluateurs = DB::table('users')->where('role','evaluateur')->get();

        return view('admin.liste_evaluateur',compact('evaluateurs'));

    }

        public function deliverys($id) {
        $clients = Clients::all();
        $current_client = Clients::findOrFail($id);
        $deliverys = $current_client->deliverys;
        return view('index', compact('current_client', 'clients', 'deliverys'));
    }


    public function SaveClient(Request $request){

        $data= DB::table('clients')->insert([
            'code' => $request->code,
            'nom'=>$request->nom,
            'email'=>$request->email,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,

        ]);

        return redirect()->back();

    }

    public function getClientById($id){
        $clients = DB::table('clients')->where('id', $id)->first();

        return response()->json($clients);

    }


    public function updateClient(Request $request){

        $data = [
            'code' => $request->code,
            'nom'=>$request->nom,
            'email'=>$request->email,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
        ];

        DB::table('clients')->where('id',$request->id)->update($data);

        return redirect()->back();

    }
   //

    public function deleteClient($id){

        DB::table('users')->where('id', $id)->delete();

        return redirect()->back();
    }
}
