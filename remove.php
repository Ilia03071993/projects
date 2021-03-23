<?php

require_once "db.php";

$id = $_POST["id"];

$query = mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id` = '$id'");
die($query ? "Delete success" : "You don`t delete");
