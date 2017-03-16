<?php

namespace App\Policies;

use App\User;
use App\MetricRoleInstance;

class MetricRoleInstancePolicy extends ModelPolicy 
{

    /**
     * Determine whether the user can view the metricRoleInstance.
     *
     * @param  \App\User  $user
     * @param  \App\MetricRoleInstance  $metricRoleInstance
     * @return mixed
     */
    public function view(User $user, MetricRoleInstance $metricRoleInstance)
    {
      $sameUser = $user->id === $metricRoleInstance->user_id;

      $u = User::where('id', $metricRoleInstance->user_id)->first();
      if(!$u) {
        return false; 
      }

      $isAdminOfSameCompany = $user->isAdmin() && $user->company_id === $u->company_id;
      
      return $sameUser || $isAdminOfSameCompany;
    }

    /**
     * Determine whether the user can create metricRoleInstances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return true; 
    }

    /**
     * Determine whether the user can update the metricRoleInstance.
     *
     * @param  \App\User  $user
     * @param  \App\MetricRoleInstance  $metricRoleInstance
     * @return mixed
     */
    public function update(User $user, MetricRoleInstance $metricRoleInstance)
    {
      $u = User::where('id', $metricRoleInstance->user_id)->first();
      if(!$u) {
        return false; 
      }
      $isAdminOfSameCompany = $user->isAdmin() && $user->company_id === $u->company_id;
      
      return $isAdminOfSameCompany;
    }

    /**
     * Determine whether the user can delete the metricRoleInstance.
     *
     * @param  \App\User  $user
     * @param  \App\MetricRoleInstance  $metricRoleInstance
     * @return mixed
     */
    public function delete(User $user, MetricRoleInstance $metricRoleInstance)
    {
      $u = User::where('id', $metricRoleInstance->user_id)->first();
      if(!$u) {
        return false; 
      }
      $isAdminOfSameCompany = $user->isAdmin() && $user->company_id === $u->company_id;
      
      return $isAdminOfSameCompany;
    }
}
