<?php

namespace App\Policies;

use App\Bia;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class BiaPolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user) {
        return Gate::any(['viewBia', 'manageBia'], $user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Bia  $bia
     * @return mixed
     */
    public function view(User $user, Bia $bia)
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Bia  $bia
     * @return mixed
     */
    public function update(User $user, Bia $bia)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Bia  $bia
     * @return mixed
     */
    public function delete(User $user, Bia $bia)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Bia  $bia
     * @return mixed
     */
    public function restore(User $user, Bia $bia)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Bia  $bia
     * @return mixed
     */
    public function forceDelete(User $user, Bia $bia)
    {
        //
    }
}
