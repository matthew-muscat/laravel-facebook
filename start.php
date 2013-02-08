<?php
/**
 * @author Matthew Muscat < http://www.onedb.com.au/ >
 * @copyright 2013 www.onedb.com.au
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Facebook SDK (Laravel Bundle)
 * @version 1.0 - 2013-02-08
 */

Autoloader::map(array(
	'Facebook' => Bundle::path('Facebook').'Facebook/Facebook.php',
));