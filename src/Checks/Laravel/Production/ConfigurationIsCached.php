<?php

namespace Arrilot\SystemCheck\Checks\Laravel\Production;

use Arrilot\SystemCheck\Checks\Check;
use Arrilot\SystemCheck\Results\Result;

class ConfigurationIsCached extends Check
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'Configuration cache';

    /**
     * Perform the check.
     *
     * @return Result
     */
    public function perform()
    {
        if (!$this->app->configurationIsCached()) {
            return $this->fail('Configuration should be cached in production');
        }

        return $this->ok();
    }
}
