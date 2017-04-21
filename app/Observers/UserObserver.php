<?php
namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserObserver {
  public function saving(User $user) {
    if($user->isDirty('password')) {
      $user->password = Hash::make($user->password);
    }  
  }
}

