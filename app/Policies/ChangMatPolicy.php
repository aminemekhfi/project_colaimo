<?php

namespace App\Policies;

use App\Models\ChangMat;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChangMatPolicy
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
        if(in_array($user->type, ['admin'])){
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ChangMat $changMat)
    {
        if(in_array($user->type, ['admin'])){
            return true;
        }
       
            return false;
        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if(in_array($user->type, ['admin'])){
            return true;
        }
        
            return false;
        
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ChangMat $changMat)
    {
        if(in_array($user->type, ['admin'])){
            return true;
        }
        else if (in_array($user->type, ['employers'])){
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ChangMat $changMat)
    {
        if(in_array($user->type, ['admin'])){
            return true;
        }
        else if(in_array($user->type, ['employers'])){
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ChangMat $changMat)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChangMat  $changMat
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ChangMat $changMat)
    {
        //
    }
}
