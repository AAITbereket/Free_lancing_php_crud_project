<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Partner_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public $Message = [];

    public function createNew(Request $request){


        $cui = DB::table('partners')->where('Cui', "$request->Cui")->get();

        if($cui->count()){

            $partners = Partner::all();
            $this->Message[0] = "Cui cannot be duplicated. Partner not added";
            $this->Message[1] = "alert-danger";
            $Message = $this->Message;
            return view('/Partner', compact('partners','Message'));

        }

        if(Partner::create($request->all())){
            $partners = Partner::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            return view('/Partner', compact('partners','Message'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $partners = Partner::all();
        return view('/Partner', compact('partners','Message'));
    }

    public function edit(Request $request){

        $partner = Partner::find($request->__Id);
        $partner->Partener = $request->Partener;
        $partner->Cui = $request->Cui;
        $partner->Nrordregcom = $request->Nrordregcom;
        $partner->Sediu = $request->Sediu;
        $partner->Iban = $request->Iban;
        $partner->Reprezentant = $request->Reprezentant;
        $partner->Functia = $request->Functia;
        $partner->save();

        $partners = Partner::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;
        return view('/Partner', compact('partners','Message'));
    }

    public function delete(Request $request){

        $temp = Partner::find($request->__Id);
        $temp->delete();

        $partners = Partner::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;
        return view('/Partner', compact('partners','Message'));
    }

}
