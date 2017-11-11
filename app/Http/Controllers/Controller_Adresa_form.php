<?php

namespace App\Http\Controllers;

use App\Adresa_form;
use Illuminate\Http\Request;

class Controller_Adresa_form extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public $Message = [];

    public function createNew(Request $request){
        if(Adresa_form::create($request->all())){

            $addreses = Adresa_form::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            return view('/Adrese', compact('addreses','Message'));
        }
        else{
            return 'Ooops something went wrong';
        }

    }

    public function viewAll (){
        $addreses = Adresa_form::all();
        return view('/Adrese', compact('addreses','Message'));
    }

    public function edit(Request $request){

        $temp = Adresa_form::find($request->__Id);
        $temp->Catre = $request->Catre;
        $temp->Data = $request->Data;
        $temp->Prezenta = $request->Prezenta;
        $temp->save();

        $addreses = Adresa_form::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        return view('/Adrese', compact('addreses','Message'));
    }

    public function delete(Request $request){

        $temp = Adresa_form::find($request->__Id);
        $temp->delete();

        $addreses = Adresa_form::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        return view('/Adrese', compact('addreses','Message'));
    }

}
