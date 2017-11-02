<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = array('Client', 'Adresa', 'Telefon' , 'Serie', 'NR', 'CNP');
}
