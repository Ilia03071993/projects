<?php
require_once "db.php";
$id = $_POST['id'];
$title = $_POST["title"];
$description = $_POST["description"];
$category = $_POST["category"];
$price = $_POST["price"];
$query = mysqli_query($db, "UPDATE `products` SET `title` = '$title', `description` = '$description', `category` = '$category', `price` = '$price' WHERE `products`.`id` = $id");
echo "<a href ='/'>Back </a>";
die($query ? "Product is update" : "Error update product");