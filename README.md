laravel-facebook
================

Laravel Bundle of the Facebook PHP SDK

Utiises a fork of the original Facebook PHP SDK that's PSR-0 compliant and features a batch request method.

Facebook PHP SDK current as of v.3.2.2


Facebook Platform
-----

The [Facebook Platform](http://developers.facebook.com/) is
a set of APIs that make your app more social.

This repository contains the open source PHP SDK that allows you to
access Facebook Platform from your PHP app. Except as otherwise noted,
the Facebook PHP SDK is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html).


Bundle Registration
-----

Add the following to your **application/bundles.php** file:

	'facebook-sdk' => array('auto' => true),


Usage
-----

    require 'facebook-php-sdk/src/Facebook.php';

    $facebook = new \Facebook\Facebook(array(
      'appId'  => 'YOUR_APP_ID',
      'secret' => 'YOUR_APP_SECRET',
    ));

    // Get User ID
    $user = $facebook->getUser();

To make [API][API] calls:

    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
      } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
      }
    }

Login or logout url will be needed depending on current user state.

    if ($user) {
      $logoutUrl = $facebook->getLogoutUrl();
    } else {
      $loginUrl = $facebook->getLoginUrl();
    }

[API]: http://developers.facebook.com/docs/api


Report Issues/Bugs
===============

Please use the issues tracker within Github.

Report platform issues to Facebook
-----
[Bugs](https://developers.facebook.com/bugs)
[Questions](http://facebook.stackoverflow.com)