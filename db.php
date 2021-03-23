<?php
$db = mysqli_connect('localhost', 'root', 'root', 'base');
if (!$db) {
    die("Error connect to database");
}