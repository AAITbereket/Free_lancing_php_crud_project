<?php

namespace App\Http\Controllers;

use App\Client;
use App\Contract_Inchierere;
use Illuminate\Http\Request;

class Contract_Inchierere_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public $Message = [];

    public function createNew(Request $request){

        $contrat = new Contract_Inchierere();
        $contrat->Client = $request->Client;
        $contrat->data = $request->data;
        $contrat->Suma = $request->Suma;
        $contrat->Items =  implode(",",$request->Items);

        if($contrat->save()){
            $contrats = Contract_Inchierere::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;


            $Clients = Client::all()->pluck('Client');
            return view('/Contract_Inchiriere', compact('contrats','Message', 'Clients'));
        }
        else{
            return 'Ooops something went wrong';
        }

    }

    public function viewAll (){
        $contrats = Contract_Inchierere::all();
        $Clients = Client::all()->pluck('Client');
        return view('/Contract_Inchiriere', compact('contrats','Message', 'Clients'));
    }

    public function edit(Request $request){

        $contrat = Contract_Inchierere::find($request->__Id);
        $contrat->Client = $request->Client;
        $contrat->data = $request->data;
        $contrat->Suma = $request->Suma;
        $contrat->Items =  implode(",",$request->Items);
        $contrat->save();

        $contrats = Contract_Inchierere::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Contract_Inchiriere', compact('contrats','Message', 'Clients'));
    }

    public function delete(Request $request){

        $temp = Contract_Inchierere::find($request->__Id);
        $temp->delete();

        $contrats = Contract_Inchierere::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Contract_Inchiriere', compact('contrats','Message', 'Clients'));
    }

}
