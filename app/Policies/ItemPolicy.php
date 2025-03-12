<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Item $item)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Item $item)
    {
        return true;
    }

    public function delete(User $user, Item $item)
    {
        return false;
    }

    public function restore(User $user, Item $item)
    {
        return false;
    }

    public function forceDelete(User $user, Item $item)
    {
        return false;
    }
}
