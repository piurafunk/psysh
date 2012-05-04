<?php

/*
 * This file is part of PsySH
 *
 * (c) 2012 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy;

use Psy\Shell;

/**
 * ShellAware interface.
 *
 * Any command implementing the ShellAware interface will get a backreference
 * to the Shell once they're added.
 */
interface ShellAware
{
    /**
     * Set the Shell backreference.
     *
     * @param Shell $shell
     */
    public function setShell(Shell $shell);
}
