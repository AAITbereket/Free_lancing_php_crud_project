<?php

namespace App\Http\Controllers;

use App\cerere_Inchiriere;
use App\Client;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class cerere_Inchiriere_Controller extends Controller
{
    //
    public $Message = [];

    public function createNew(Request $request){

            $items = [];
            $cerere = new cerere_Inchiriere();
            $cerere->Client = $request->Client;
            $cerere->data = $request->data;
            $cerere->Items =  implode(",",$request->Items);

        if($cerere->save()){
            $cereres = cerere_Inchiriere::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;

            $Clients = Client::all()->pluck('Client');
            return view('/Cerere_Inchiriere', compact('cereres','Message', 'Clients'));
        }
        else{
            return 'Ooops something went wrong';
        }

    }

    public function viewAll (){
        $cereres = cerere_Inchiriere::all();
        $Clients = Client::all()->pluck('Client');
        return view('/Cerere_Inchiriere', compact('cereres','Message', 'Clients'));
    }

    public function edit(Request $request){

        $cerere = cerere_Inchiriere::find($request->__Id);
        $cerere->Client = $request->Client;
        $cerere->data = $request->data;
        $cerere->Items =  implode(",",$request->Items);
        $cerere->save();

        $cereres = cerere_Inchiriere::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Cerere_Inchiriere', compact('cereres','Message', 'Clients'));
    }

    public function delete(Request $request){

        $cerere = cerere_Inchiriere::find($request->__Id);
        $cerere->delete();

        $cereres = cerere_Inchiriere::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Cerere_Inchiriere', compact('cereres','Message', 'Clients'));
    }


}
