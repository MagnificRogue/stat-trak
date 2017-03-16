<?php

namespace App\Policies;

use App\User;
use App\Metric;

class MetricPolicy extends ModelPolicy
{

    /**
     * Determine whether the user can view the metric.
     *
     * @param  \App\User  $user
     * @param  \App\Metric  $metric
     * @return mixed
     */
    public function view(User $user, Metric $metric)
    {
      return $user->company_id === $metric->company_id;
    }

    /**
     * Determine whether the user can create metrics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the metric.
     *
     * @param  \App\User  $user
     * @param  \App\Metric  $metric
     * @return mixed
     */
    public function update(User $user, Metric $metric)
    {
      return $user->isAdmin() && $user->company_id === $metric->company_id;
    }

    /**
     * Determine whether the user can delete the metric.
     *
     * @param  \App\User  $user
     * @param  \App\Metric  $metric
     * @return mixed
     */
    public function delete(User $user, Metric $metric)
    {
      return $user->isAdmin() && $user->company_id === $metric->company_id;
    }
}
