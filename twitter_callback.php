<?php
require_once 'header.php';

if (isset($_REQUEST['oauth_verifier'])) {
    if($socialPosting->setAccessToken($_REQUEST['oauth_token'], $_REQUEST['oauth_verifier'])){
        header('Location: '.$config['twitter']['CALLBACK_REDIRECT']);
        exit;
    }

}