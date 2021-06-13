<?php


function getUser($userId){
    global $pdo;
    return $pdo->query("SELECT * FROM users WHERE id = $userId")->fetch();
}