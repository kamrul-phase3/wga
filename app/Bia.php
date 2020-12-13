<?php

namespace App;

use App\Company;
use App\BiaDepartment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bia extends Model {
    use HasFactory;
    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function departments() {
        return $this->hasMany(BiaDepartment::class, 'bia_id', 'id');
    }
	public function activeItem($companyId) {
		$bia = $this->where('company_id', '=', $companyId)->first();
	}
    public function logo() {
        if ( !empty($this->logo) ) {
            return '<img src="'. url('storage/'.$this->logo) .'" alt="logo">';
        }
        return null;
    }
}
