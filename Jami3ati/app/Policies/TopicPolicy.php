<?php

namespace App\Policies;

use App\Tpoic;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TopicPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tpoics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tpoic.
     *
     * @param  \App\User  $user
     * @param  \App\Tpoic  $tpoic
     * @return mixed
     */
    public function view(User $user, Tpoic $tpoic)
    {
        //
    }

    /**
     * Determine whether the user can create tpoics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tpoic.
     *
     * @param  \App\User  $user
     * @param  \App\Tpoic  $tpoic
     * @return mixed
     */
    public function update(User $user, Tpoic $tpoic)
    {
        //return $user->id === $tpoic->user()->id;
    }

    /**
     * Determine whether the user can delete the tpoic.
     *
     * @param  \App\User  $user
     * @param  \App\Tpoic  $tpoic
     * @return mixed
     */
    public function delete(User $user, Tpoic $tpoic)
    {
        //return $user->id === $tpoic->user()->id;

    }

    /**
     * Determine whether the user can restore the tpoic.
     *
     * @param  \App\User  $user
     * @param  \App\Tpoic  $tpoic
     * @return mixed
     */
    public function restore(User $user, Tpoic $tpoic)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tpoic.
     *
     * @param  \App\User  $user
     * @param  \App\Tpoic  $tpoic
     * @return mixed
     */
    public function forceDelete(User $user, Tpoic $tpoic)
    {
        //
    }
}
