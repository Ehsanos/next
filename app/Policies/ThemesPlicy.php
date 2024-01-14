<?php

namespace App\Policies;

use App\Models\Themes;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThemesPlicy
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
        return  true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Themes  $themes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Themes $themes)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Themes  $themes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Themes $themes)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Themes  $themes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Themes $themes)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Themes  $themes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Themes $themes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Themes  $themes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Themes $themes)
    {
        //
    }
}
