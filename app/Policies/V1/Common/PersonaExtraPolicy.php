<?php

namespace App\Policies\V1\Common;

use App\Models\V1\Users\User;
use Illuminate\Auth\Access\Response;
use App\Models\V1\Common\PersonaExtra;

class PersonaExtraPolicy
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
    public function view(User $user, PersonaExtra $personaExtra): bool
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
    public function update(User $user, PersonaExtra $personaExtra): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PersonaExtra $personaExtra): Response
    {
        return Response::denyWithStatus(403);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PersonaExtra $personaExtra): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PersonaExtra $personaExtra): Response
    {
        return Response::denyWithStatus(403);
    }
}
