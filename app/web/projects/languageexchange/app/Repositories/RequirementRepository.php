<?php

namespace App\Repositories;

use App\User;
use App\Requirement;

class RequirementRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Requirement::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}

