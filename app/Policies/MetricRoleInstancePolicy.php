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
        //
    }

    /**
     * Determine whether the user can create metricRoleInstances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
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
        //
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
        //
    }
}
