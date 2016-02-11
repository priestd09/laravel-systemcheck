<?php

namespace Arrilot\SystemCheck\Checks\Laravel\Production;

use Arrilot\SystemCheck\Checks\BaseCheck;

class SessionDriver extends BaseCheck
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'session.driver';

    /**
     * Perform the check.
     *
     * @return void
     */
    public function perform()
    {
        $driver = $this->app['config']['session.driver'];

        if ($driver === 'array') {
            $this->fail("session.driver must not be set to 'array' in production");
        }

        if ($driver === 'file') {
            $this->note('File session driver is not recommended for production');
        }
    }
}