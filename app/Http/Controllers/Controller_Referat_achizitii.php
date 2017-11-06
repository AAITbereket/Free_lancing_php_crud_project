<?php

namespace App\Http\Controllers;

use App\Adresa_form;
use App\Items_purchased;
use App\Purchase_Report_Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_Referat_achizitii extends Controller
{
    //
    public $Message = [];

    public function createNew(Request $request){

        $Purchase_id = uniqid();

        $New_purchase_reposrt = new Purchase_Report_Form();
        $New_purchase_reposrt->Data = $request->Data;
        $New_purchase_reposrt->Justificarea_achizitiei = $request->Justificarea_achizitiei;
        $New_purchase_reposrt->Amount = $request->Suma;
        $New_purchase_reposrt->Description = $request->Description;
        $New_purchase_reposrt->Purchase_unique_id = $Purchase_id;
        $New_purchase_reposrt->save();

        for ($i = 0; $i < count($request->Clauze_Item); $i++) {
            $new_item = new Items_purchased();
            $new_item->Purchase_id = $Purchase_id;
            $new_item->Item = $request->Items_[$i];
            $new_item->Item_descriptioin = $request->Items_Desc[$i];
            $new_item->Contractual_clause_item = $request->Clauze_Item[$i];
            $new_item->Item_price = $request->Pret_Item[$i];
            $new_item->save();
        }

        $purchases = Purchase_Report_Form::all();
        return view('/Referat_achizitii', compact('purchases','Message'));

    }

    public function viewAll (){
        $purchases = Purchase_Report_Form::all();
        return view('/Referat_achizitii', compact('purchases','Message'));
    }

    public function edit_view($Purchase_Id){

        $Purchase = DB::table('purchase__report__forms')->where('Purchase_unique_id', "$Purchase_Id")->first();

        $Items = DB::table('items_purchaseds')->where('Purchase_id', "$Purchase_Id")->get();

        return view('/Edit_View_Referat_achizitii', compact('Purchase','Items'));
    }

    public function view_for_print($Purchase_Id){

        $Purchase = DB::table('purchase__report__forms')->where('Purchase_unique_id', "$Purchase_Id")->first();

        $Items = DB::table('items_purchaseds')->where('Purchase_id', "$Purchase_Id")->get();

        return view('/Print_View_Referat_achizitii', compact('Purchase','Items'));

    }

    public function delete(Request $request){

        $temp = Purchase_Report_Form::find($request->__Id);
        $temp->delete();

        $purchases = Purchase_Report_Form::all();
        $this->Message[0] = "Sucessfully Deleted !";
        $this->Message[1] = "alert-danger";
        $Message = $this->Message;

        return view('/Referat_achizitii', compact('purchases','Message'));
    }

    public function edit_view_post(Request $request){

//        return $request->all();
        $Purchase_Id = $request->Purchase_unique_id;

//        $New_purchase_reposrt = DB::table('purchase__report__forms')->where('Purchase_unique_id', "$Purchase_Id")->first();

        $New_purchase_reposrt = Purchase_Report_Form::find($request->id_);

        DB::table('items_purchaseds')->where('Purchase_id', "$Purchase_Id")->delete();

        $New_purchase_reposrt->Data = $request->Data    ;
        $New_purchase_reposrt->Justificarea_achizitiei = $request->Justificarea_achizitiei;
        $New_purchase_reposrt->Amount = $request->Suma;
        $New_purchase_reposrt->Description = $request->Description;
        $New_purchase_reposrt->Purchase_unique_id = $Purchase_Id;
        $New_purchase_reposrt->save();

        for ($i = 0; $i < count($request->Clauze_Item); $i++) {
            $new_item = new Items_purchased();
            $new_item->Purchase_id = $Purchase_Id;
            $new_item->Item = $request->Items_[$i];
            $new_item->Item_descriptioin = $request->Items_Desc[$i];
            $new_item->Contractual_clause_item = $request->Clauze_Item[$i];
            $new_item->Item_price = $request->Pret_Item[$i];
            $new_item->save();
        }

        $purchases = Purchase_Report_Form::all();
        return view('/Referat_achizitii', compact('purchases','Message'));
    }

}




