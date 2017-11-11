<?php

namespace App\Http\Controllers;

use App\Partner;
use App\PV_Constatare_a_serviciilor_prestate;
use Illuminate\Http\Request;

class Controller_PVConstatareAServiciil extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//
    public $Message = [];

    public function createNew(Request $request){

        if(PV_Constatare_a_serviciilor_prestate::create($request->all())){

            $PVprestates = PV_Constatare_a_serviciilor_prestate::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            $Partners = Partner::all()->pluck('Partener');
            return view('/PV_constatare_serviciilor_prestate', compact('PVprestates','Message', 'Partners'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $PVprestates = PV_Constatare_a_serviciilor_prestate::all();
        $Partners = Partner::all()->pluck('Partener');
        return view('/PV_constatare_serviciilor_prestate', compact('PVprestates','Message', 'Partners'));
    }

    public function edit(Request $request){

        $temp = PV_Constatare_a_serviciilor_prestate::find($request->__Id);
        $temp->Data = $request->Data;
        $temp->Partener = $request->Partener;
        $temp->Sericiile_Prestate =  $request->Sericiile_Prestate;
        $temp->Contract = $request->Contract;
        $temp->Data_Contract =  $request->Data_Contract;
        $temp->save();

        $PVprestates = PV_Constatare_a_serviciilor_prestate::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;

        $Partners = Partner::all()->pluck('Partener');
        return view('/PV_constatare_serviciilor_prestate', compact('PVprestates','Message', 'Partners'));
    }

    public function delete(Request $request){

        $temp = PV_Constatare_a_serviciilor_prestate::find($request->__Id);
        $temp->delete();

        $PVprestates = PV_Constatare_a_serviciilor_prestate::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        $Partners = Partner::all()->pluck('Partener');
        return view('/PV_constatare_serviciilor_prestate', compact('PVprestates','Message', 'Partners'));
    }

}
