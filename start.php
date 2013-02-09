<?php
/**
 * @author Matthew Muscat < http://www.mamis.com.au/ >
 * @copyright 2013 www.mamis.com.au
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Facebook (Laravel Bundle)
 * @version 1.0 - 2013-02-09
 */

Autoloader::namespaces(array(
    'Facebook' => __DIR__.'/Facebook',
));

Laravel\IoC::singleton('facebook', function()
{
    if (Config::has('facebook')){
	$config['appId'] = Config::get('facebook.appId');
	$config['secret'] = Config::get('facebook.secret');
	$config['fileUpload'] = Config::get('facebook.fileUpload', true);

	return new Facebook(array(
            'appId' => Config::get('facebook.appId'),
            'secret' => Config::get('facebook.secret'),
            'fileUpload' => Config::get('facebook.fileUpload'),
            ));
    }
});