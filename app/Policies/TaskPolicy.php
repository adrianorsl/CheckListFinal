<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

     

    public function __construct()
    {
        //
    }

    public function before(User $user) 
    {
         if($user->type == 'administrator') {
              return true;
         }
    }
}
