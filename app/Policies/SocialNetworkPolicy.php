<?php

namespace App\Policies;

use App\Models\SocialNetwork;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocialNetworkPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SocialNetwork  $socialNetwork
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SocialNetwork $socialNetwork)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SocialNetwork  $socialNetwork
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SocialNetwork $socialNetwork)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SocialNetwork  $socialNetwork
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SocialNetwork $socialNetwork)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SocialNetwork  $socialNetwork
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, SocialNetwork $socialNetwork)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SocialNetwork  $socialNetwork
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, SocialNetwork $socialNetwork)
    {
        return auth()->user()->role_id === 1 || auth()->user()->role_id === 2;
    }
}
