<?php
require_once "../db.php";
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//    die();
$title = $_POST["title"];
$description = $_POST["description"];
$category = $_POST["category"];
$price = $_POST["price"];

$query = mysqli_query($db, "INSERT INTO `products` (`id`, `title`, `description`, `category`, `price`) VALUES (NULL , '$title', '$description', '$category', '$price')");

die($price ? "product is store" : "Error store product");



