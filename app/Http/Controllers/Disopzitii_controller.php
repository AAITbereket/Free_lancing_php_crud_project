<?php

namespace App\Http\Controllers;

use App\Client;
use App\Disopzitii;
use Illuminate\Http\Request;

class Disopzitii_controller extends Controller
{
    //
    public $Message = [];

    public function createNew(Request $request){

        if(Disopzitii::create($request->all())){
            $deposits = Disopzitii::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            $Clients = Client::all()->pluck('Client');
            return view('/Disopzitii_Incasare', compact('deposits','Message', 'Clients'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $deposits = Disopzitii::all();
        $Clients = Client::all()->pluck('Client');
        return view('/Disopzitii_Incasare', compact('deposits','Message', 'Clients'));
    }

    public function edit(Request $request){

        $temp = Disopzitii::find($request->__Id);
        $temp->Client = $request->Client;
        $temp->data = $request->data;
        $temp->Suma =  $request->Suma;
        $temp->save();

        $deposits = Disopzitii::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Disopzitii_Incasare', compact('deposits','Message', 'Clients'));
    }

    public function delete(Request $request){

        $temp = Disopzitii::find($request->__Id);
        $temp->delete();

        $deposits = Disopzitii::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        $Clients = Client::all()->pluck('Client');
        return view('/Disopzitii_Incasare', compact('deposits','Message', 'Clients'));
    }
}
