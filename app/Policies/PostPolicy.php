<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        //return $user->hasRole(['Super-Admin', 'Admin', 'Moderator']);
        // if ($user->hasRole(['Super-Admin', 'Admin', 'Moderator']) || $user->hasPermissionTo('Create Posts')) {
        //     return true;
        // }
        // return false;

        if ($user->hasPermissionTo('View Post')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool
    {
        //
        if ($user->hasPermissionTo('View Post')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        //return $user->hasRole(['Super-Admin', 'Admin', 'Moderator']);
        // if ($user->hasRole(['Super-Admin', 'Admin', 'Moderator']) || $user->hasPermissionTo('Create Posts')) {
        //     return true;
        // }
        // return false;

        if ($user->hasPermissionTo('Create Post')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {
        //
        //return $user->hasRole(['Super-Admin', 'Admin', 'Moderator']);

        if ($user->hasPermissionTo('Update Post')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {
        //
        //return $user->hasRole(['Super-Admin', 'Admin']);

        if ($user->hasPermissionTo('Delete Post')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        //
    }
}