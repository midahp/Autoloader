<?php
/**
 * Horde_Autoloader interface.
 *
 * PHP 5
 *
 * @category Horde
 * @package  Autoloader
 * @author   Bob Mckee <bmckee@bywires.com>
 * @author   Chuck Hagenbuch <chuck@horde.org>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @link     http://www.horde.org/libraries/Horde_Autoloader
 */

/**
 * Horde_Autoloader interface.
 *
 * @category Horde
 * @package  Autoloader
 * @author   Bob Mckee <bmckee@bywires.com>
 * @author   Chuck Hagenbuch <chuck@horde.org>
 * @license  http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @link     http://www.horde.org/libraries/Horde_Autoloader
 */
interface Horde_Autoloader
{
    /**
     * Register this instance as autoloader.
     *
     * @return NULL
     */
    public function registerAutoloader();

    /**
     * Try to load the definition for the provided class name.
     *
     * @param string $className The name of the undefined class.
     *
     * @return NULL
     */
    public function loadClass($className);
}
