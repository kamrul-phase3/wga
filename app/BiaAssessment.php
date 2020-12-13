<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiaAssessment extends Model {
    use HasFactory;
    protected $table = 'bia_assessments';
    // RELATIONS
    public function company() {}
    public function bia() {}
    public function department() {}
    // SEARCH
    public function scopeSearchBia($query, $bia) {
	  if ($bia) $query->where('bia_id', $bia);
	}
	public function scopeSearchDepartment($query, $department) {
	  if ($department) $query->where('department_id', $department);
	}
	public function scopeSearchSection($query, $section) {
	  if ($section) $query->where('section_id', $section);
	}
	public function scopeSearchMeta($query, $meta) {
	  if ($meta) $query->where('meta', $meta);
	}
}
