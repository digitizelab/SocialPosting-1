Social Posting
===================

> **Note**
> Currently this supports only **Twitter** auto posting, Facebook & Google+ can be added in the future

Installation instructions :

First install composer dependancies by running

> composer install

Then create the configuration file

> <site_root>/config/social_networks.php


Eg: configuration file format

    $config = array(
    'twitter' => array(
        'CONSUMER_KEY' => 'xxxxxxxxxxxxxxxxx',
        'CONSUMER_SECRET' => 'xxxxxxxxxxxxxxxxxx',
        'OAUTH_CALLBACK' => 'http://your.site/twitter_callback.php',
        'CALLBACK_REDIRECT' => 'http://your.site',
    ));

Test your app by navigating to your site's homepage.

----------


File Structure
-------------

- Files used to post status is located in site root
- 3rd Party plugins and SocialPosting package will be added to /vendor after composer install

&copy; *Nishan Karunarathna <info@nishan.me>*