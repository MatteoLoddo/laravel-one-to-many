<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public $fillable=['title','sistem_version','updating_date','image_url','description'];
}
