<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PV_Constatare_a_serviciilor_prestate extends Model
{
    //
    protected $fillable = array('Data', 'Partener', 'Sericiile_Prestate' , 'Contract', 'Data_Contract');
}
