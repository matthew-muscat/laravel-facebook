<?php
/**
 * @author Matthew Muscat < http://www.mamis.com.au/ >
 * @copyright 2013 www.mamis.com.au
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Facebook (Laravel Bundle)
 * @version 1.0 - 2013-02-11
 */

Autoloader::map(array(
    'Facebook' => __DIR__.'/facebook.php',
    'Facebook\\Facebook' => __DIR__.'/vendor/Facebook.php',
));