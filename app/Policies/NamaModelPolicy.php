<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\NamaModel;
use App\Models\User;

class NamaModelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any NamaModel');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('view NamaModel');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create NamaModel');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('update NamaModel');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('delete NamaModel');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any NamaModel');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('restore NamaModel');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any NamaModel');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('replicate NamaModel');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder NamaModel');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, NamaModel $namamodel): bool
    {
        return $user->checkPermissionTo('force-delete NamaModel');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any NamaModel');
    }
}
