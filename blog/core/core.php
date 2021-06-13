<?php
session_start();
include 'config.php';
include 'db.php';
include 'functions.php';

$user = null;
if($_SESSION['user_id']){
    $user = getUser($_SESSION['user_id']);
}

if(isset($forUser ) && !$user){
    header('Location:/');
    exit();
}
