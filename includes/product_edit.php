<?php
require_once "../db.php";

$id = $_GET["id"];

$product = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
if (mysqli_num_rows($product) === 0) {
    die('Product not found');
}
$product = mysqli_fetch_assoc($product);

?>
<form action="../save.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <p>Title</p>
    <input type="text" name="title" value="<?=$product['title']?>">
    <p>Description</p>
    <textarea name="description" cols="30" rows="10"><?=$product['description']?></textarea>
    <p>Category</p>
    <select name="category">
        <option><?=$product['category']?></option>
        <?php
        $categories = ['Продукты', 'Товары', 'Хоз товары'];
        foreach ($categories as $category){
            if ($category !== $categories){
                echo "<option>" . $category . "</option>" ;
            }
        }

        ?>

    </select>
    <p>Price</p>
    <input type="number" name="price" value="<?=$product['price']?>">
    <br>
    <br>
    <button type="submit">Добавить</button>

</form>

