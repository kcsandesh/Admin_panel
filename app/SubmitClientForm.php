<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmitClientForm extends Model
{
    protected $fillable = [
        'name','number', 'email', 'address',
    ];
}

