<?php

class Facebook {
	public static function connect($appId, $secret, $fileUpload = true)
	{
		return new Facebook\Facebook(array(
                    'appId' => $appId,
                    'secret' => $secret,
                    'fileUpload' => $fileUpload,
                ));
	}
}