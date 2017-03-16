<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

abstract class ModelPolicy 
{
  use HandlesAuthorization;

  public function before(User $user, $ability)
  {
      if ($user->isSuperAdmin()) {
              return true;
      }
  }
}
