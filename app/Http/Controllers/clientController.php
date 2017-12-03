<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public $Message = [];

    public function createNew(Request $request){

        $cnp = DB::table('clients')->where('CNP', "$request->CNP")->get();

        if($cnp->count()){
            $clients = Client::all();
            $this->Message[0] = "Duplicate CNP filed. Client Not Added";
            $this->Message[1] = "alert-danger";
            $Message = $this->Message;
            return view('/Client', compact('clients','Message'));
        }

        if(Client::create($request->all())){
            $clients = Client::all();
            $this->Message[0] = "Sucessfully Added";
            $this->Message[1] = "alert-success";
            $Message = $this->Message;
            return view('/Client', compact('clients','Message'));
        }
        else{
            return 'Ooops something went wrong';
        }
    }

    public function viewAll (){
        $clients = Client::all();
        return view('/Client', compact('clients','Message'));
    }

    public function edit(Request $request){

        $client = Client::find($request->__Id);
        $client->Client = $request->Client;
        $client->Adresa = $request->Adresa;
        $client->Telefon = $request->Telefon;
        $client->Serie = $request->Serie;
        $client->NR = $request->NR;
        $client->CNP = $request->CNP;
        $client->save();

        $clients = Client::all();
        $this->Message[0] = "Sucessfully Updated";
        $this->Message[1] = "alert-info";
        $Message = $this->Message;
        return view('/Client', compact('clients','Message'));
    }

    public function delete(Request $request){

        $client = Client::find($request->__Id);
        $client->delete();

        $clients = Client::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;
        return view('/Client', compact('clients','Message'));
    }

}
