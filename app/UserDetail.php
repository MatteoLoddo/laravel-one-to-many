<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = 
    [
        "city",
        "address",
        "phone",
        "province"

    ];
    // funzione per recuperare l utente
    public function user(){
        return $this->belongsTo('App\User');
    }
}
