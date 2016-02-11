<?php

namespace Arrilot\SystemCheck\Checks\Server\Production;

use Arrilot\SystemCheck\Checks\BaseCheck;

class XdebugIsDisabled extends BaseCheck
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'Xdebug is disabled';

    /**
     * Perform the check.
     *
     * @return void
     */
    public function perform()
    {
        if (extension_loaded('xdebug')) {
            $this->fail("Xdebug extension should not be loaded in production");
        }
    }
}