<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=' . $config['db']['name'] . ';charset=UTF8',
    $config['db']['user'],
    $config['db']['password']
);