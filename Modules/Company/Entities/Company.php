<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['name', 'active'];

    protected $table = 'sft_company';

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }
}
