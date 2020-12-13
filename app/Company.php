<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Silvanite\Brandenburg\Traits\HasRoles;

class Company extends Model {
    use HasFactory;
    // use HasRoles;
    public function users() {
        return $this->hasMany(\App\User::class,'company_id','id');
    }
    public function bias() {
        return $this->hasMany(\App\Bia::class,'company_id','id');
    }
    public function departments() {
        return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function upstreamDependencies() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function externalDependencies() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function desktopCatalogue() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function mobileApps() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function riskAssets() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function riskVulnerabilities() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function sfiaTeams() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function sfiaUsers() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
    public function sfiaRoles() {
        // return $this->hasMany(\App\Companybiadepartment::class,'company_id','id');
    }
}
