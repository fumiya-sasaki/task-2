<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'plofile_id' => 'required',
        'edited_at' => 'required',);
}
