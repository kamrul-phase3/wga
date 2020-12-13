<?php
namespace App\Policies;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;
class CompanyPolicy {
    use HandlesAuthorization;
    public function __construct() {
        //
    }
    public function viewAny($user) {
        return Gate::any(['viewBia', 'manageBia'], $user);
    }
    public function view($user, $post) {
        return Gate::any(['viewBia', 'manageBia'], $user, $post);
    }
    public function create($user) {
        return $user->can('manageBia');
    }
    public function update($user, $post) {
        return $user->can('manageBia', $post);
    }
    public function delete($user, $post) {
        return $user->can('manageBia', $post);
    }
    public function restore($user, $post) {
        return $user->can('manageBia', $post);
    }
    public function forceDelete($user, $post) {
        return $user->can('manageBia', $post);
    }
}