<?php
namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserObserver {

  public function created(User $user) {
    if($user->isDirty('password')) {
      $user->password = Hash::make($user->password);
    }  
  }

  public function updating(User $user) {
    if($user->isDirty('password')) {
      $user->password = Hash::make($user->password);
    } 
  }
}

