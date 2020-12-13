<?php
namespace App;

use App\Company;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silvanite\Brandenburg\Traits\HasRoles;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Silvanite\Brandenburg\Role;
use \Illuminate\Support\Str;

class User extends Authenticatable {
    use Notifiable;
    use HasRoles;
    
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    // protected static function boot() {
    //     parent::boot();

    //     static::created(function($user) {
    //         $user->assignRole('Viewer');
    //     });
    // }

    public function getAvatarUrl($size=200) {
        if ( is_null($this->avatar) ) {
            $hash = md5(Str::lower($this->email));
            return 'http://www.gravatar.com/avatar/'.$hash.'?s='.$size.'&d=identicon';
        }
        return url('storage/'.$this->avatar);
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function switchableUsers() {
        return $this->whereHas('roles', function($q) {
            $q->whereNotIn('roles.slug', ['admin', 'advisor']);
        })->with('company')->get();
        // return $this->where('id', '!=', $this->id)->with('company', 'roles')->get();
    }
    public function hasRole($role) {
        if ( is_array($role) ) return $this->roles->contains($role[0], $role[1]);
        else return $this->roles->contains('slug', $role);
    }
    public function role() {
        return $this->roles->first()->name;
    }

    public function test() {
        if ( is_null($this->avatar) ) {
            $hash = md5(Str::lower('nur.mohammad@gmail.com'));
            return 'http://www.gravatar.com/avatar/'.$hash.'??s=200&d=identicon';
        }
        return url('storage/'.$this->avatar);
    }
}