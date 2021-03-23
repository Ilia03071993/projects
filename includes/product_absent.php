<?php

require_once "../db.php";

$id = $_GET["id"];

$product = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");

if (mysqli_num_rows($product) === 0) {
    die('Product not found');
}
$product = mysqli_fetch_assoc($product);


?>
<form action="../remove.php" method="post">
    <input type="hidden" name="id" value="<?=$product["id"]?>">
    <h3>Удалить продукт?<?=$product["title"]?> </h3>
    <button type="submit">Подтверждаю</button>
    <a href="/">Back</a>
</form>
