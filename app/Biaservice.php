<?php

namespace App;

use App\Biadepartment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaservice extends Model {
    use HasFactory;
    protected $table = 'bia_services';
    public function department() {
        return $this->belongsTo(Biadepartment::class);
    }
}
