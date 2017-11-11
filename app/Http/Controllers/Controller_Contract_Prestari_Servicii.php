<?php

namespace App\Http\Controllers;

use App\Contract_Prestari_Servicii;
use App\Partner;
use Illuminate\Http\Request;

class Controller_Contract_Prestari_Servicii extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public $Message = [];

    public function createNew(Request $request){

        if(Contract_Prestari_Servicii::create($request->all())){
            $contracts = Contract_Prestari_Servicii::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            $Partners = Partner::all()->pluck('Partener');
            return view('/contract_prestari_servicii', compact('contracts','Message', 'Partners'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $contracts = Contract_Prestari_Servicii::all();
        $Partners = Partner::all()->pluck('Partener');
        return view('/contract_prestari_servicii', compact('contracts','Message', 'Partners'));
    }

    public function edit(Request $request){

        $temp = Contract_Prestari_Servicii::find($request->__Id);
        $temp->Partener = $request->Partener;
        $temp->Obiectul_Contractului = $request->Obiectul_Contractului;
        $temp->Suma =  $request->Suma;
        $temp->Durata_Contractului = $request->Durata_Contractului;
        $temp->Obligatiile_Prestatorului =  $request->Obligatiile_Prestatorului;
        $temp->save();

        $contracts = Contract_Prestari_Servicii::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        $Partners = Partner::all()->pluck('Partener');
        return view('/contract_prestari_servicii', compact('contracts','Message', 'Partners'));
    }

    public function delete(Request $request){

        $temp = Contract_Prestari_Servicii::find($request->__Id);
        $temp->delete();

        $contracts = Contract_Prestari_Servicii::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        $Partners = Partner::all()->pluck('Partener');
        return view('/contract_prestari_servicii', compact('contracts','Message', 'Partners'));
    }

}
