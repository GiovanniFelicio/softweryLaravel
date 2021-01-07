<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
         'name', 'active'
    ];

    protected $table = 'SFT_COMPANY';

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
    }
}
