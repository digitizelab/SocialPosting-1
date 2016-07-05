<?php
require_once 'header.php';

if($_POST){

    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);

    if($socialPosting->setStatus($status)){
        header('Location: '.$config['twitter']['CALLBACK_REDIRECT'].'/?posted=true');
        exit;
    };
}