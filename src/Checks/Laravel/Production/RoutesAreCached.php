<?php

namespace Arrilot\SystemCheck\Checks\Laravel\Production;

use Arrilot\SystemCheck\Checks\Check;
use Arrilot\SystemCheck\Results\Result;

class RoutesAreCached extends Check
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'Route cache';

    /**
     * Perform the check.
     *
     * @return Result
     */
    public function perform()
    {
        if (!$this->app->routesAreCached()) {
            return $this->fail('Routes should be cached in production');
        }

        return $this->ok();
    }
}
