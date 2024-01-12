<?php

namespace App\Policies;

use App\Models\TaxiClass;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaxiClassPolicy
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
    public function view(User $user, TaxiClass $taxiClass): bool
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
    public function update(User $user, TaxiClass $taxiClass): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TaxiClass $taxiClass): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TaxiClass $taxiClass): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TaxiClass $taxiClass): bool
    {
        //
    }
}
