<?php

namespace App\Http\Controllers;

use App\Referat_nereguli;
use Illuminate\Http\Request;

class Controller_Referat_nereguli extends Controller
{
    //
    public $Message = [];

    public function createNew(Request $request){
        if(Referat_nereguli::create($request->all())){

            $neregulis = Referat_nereguli::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            return view('/Referat_nereguli', compact('neregulis','Message'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $neregulis = Referat_nereguli::all();
        return view('/Referat_nereguli', compact('neregulis','Message'));
    }

    public function edit(Request $request){

        $temp = Referat_nereguli::find($request->__Id);
        $temp->constatare = $request->constatare;
        $temp->Data = $request->Data;
        $temp->propunere = $request->propunere;
        $temp->save();

        $neregulis = Referat_nereguli::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        return view('/Referat_nereguli', compact('neregulis','Message'));
    }

    public function delete(Request $request){

        $temp = Referat_nereguli::find($request->__Id);
        $temp->delete();

        $neregulis = Referat_nereguli::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        return view('/Referat_nereguli', compact('neregulis','Message'));
    }

}
