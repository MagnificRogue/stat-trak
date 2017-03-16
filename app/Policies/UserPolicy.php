<?php

namespace App\Policies;

use App\User;
use App\User;

class UserPolicy extends ModelPolicy
{

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\User  $viewer
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $viewer, User $user)
    {
        //
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\User  $updater
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $updater, User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\User  $user
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $deleter, User $user)
    {
        //
    }
}
