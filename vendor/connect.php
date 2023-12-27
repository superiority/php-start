<?php

// mysql_connect

$connect = mysqli_connect('localhost', 'root', '', 'test-php');

if (!$connect) {
    die('Error connect to Database');
}