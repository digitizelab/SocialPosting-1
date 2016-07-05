<?php

//require 'TwitterPost.php';
require 'vendor/autoload.php';
require 'config/social_networks.php';

session_start();

$socialPosting = new SocialPosting\TwitterPost($config['twitter']);