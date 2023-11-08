<?php

// Connect to MYSQL database
require 'Database.php';
$config = require('config/dbConfig.php');

try {
    $db = new Database($config, 'root', 'root@123');
} catch (Exception $exception) {
    echo '<pre>';
    echo $exception->getMessage();
    echo '</pre>';
    // die();
}

$heading = 'Home';

// get all post
$posts = $db->query('select * from posts')->fetchAll();


require 'views/index.view.php';
