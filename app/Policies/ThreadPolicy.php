<?php

namespace App\Policies;

use App\Forum\Thread;
use App\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThreadPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given thread can be updated by the user.
     */
    public function update(User $user, Thread $thread): bool
    {
        return $thread->isAuthoredBy($user);
    }

    /**
     * Determine if the given thread can be deleted by the user.
     */
    public function delete(User $user, Thread $thread): bool
    {
        return $thread->isAuthoredBy($user);
    }
}