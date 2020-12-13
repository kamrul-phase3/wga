<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companybiadepartment extends Model {
    use HasFactory;
    public function company() {
        return $this->belongsTo(\App\Company::class,'company_id','id');
    }
    public function biadepertments() {
        return $this->hasMany(\App\Biadepartment::class,'companybiadepartment_id','id');
    }
}
