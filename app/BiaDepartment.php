<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiaDepartment extends Model {
    use HasFactory;
    protected $table = 'bia_departments';
    public function bia() {
        return $this->belongsTo(\App\Bia::class);
    }
    public function companybiadepartment() {
        return $this->belongsTo(\App\Companybiadepartment::class);
    }
    public function companybiadepartmentname() {
        $biaId->company_id = $this->bia()->get();
        $company_id = $biaId->company_id;
        return \App\Companybiadepartment::where('company_id', '=', $company_id)->get();
    }
    public function services() {
        return $this->hasMany(\App\Biaservice::class, 'department_id', 'id');
    }
}
