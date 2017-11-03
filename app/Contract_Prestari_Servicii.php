<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract_Prestari_Servicii extends Model
{
    //
    protected $fillable = array('Partener', 'Obiectul_Contractului', 'Suma', 'Durata_Contractului', 'Obligatiile_Prestatorului');
}
