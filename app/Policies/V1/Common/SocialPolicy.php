<?php

namespace App\Policies\V1\Common;

use App\Models\V1\Users\User;
use App\Models\V1\Common\Social;
use Illuminate\Auth\Access\Response;

class SocialPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Social $social): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Social $social): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Social $social): Response
    {
        return Response::denyWithStatus(403);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Social $social): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Social $social): Response
    {
        return Response::denyWithStatus(403);
    }
}
