<?php
require_once "db.php";

$products = mysqli_query($db, "SELECT * FROM `products` ");

?>

<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>category</th>
        <th>price</th>
        <?php
        while ($product = mysqli_fetch_assoc($products)) {
        ?>
    </tr>
    <td><?=$product["id"]?></td>
    <td><?=$product["title"]?></td>
    <td><?=$product["description"]?></td>
    <td><?=$product["category"]?></td>
    <td><?=$product["price"]?></td>
    <td>
        <a href="includes/product_edit.php?id=<?=$product["id"]?>">Изменить</a>
        <a href="includes/product_absent.php?id=<?=$product["id"]?>">Удалить</a>
    </td>
    <?php
    }
    ?>

</table>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: antiquewhite;
    }

    td {
        background: aquamarine;
    }
</style>

<form action="includes/add_product.php" method="post" enctype="multipart/form-data">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description" cols="30" rows="10">Описание товара</textarea>
    <p>Category</p>
    <select name="category">
        <option>Игрушки</option>
        <option>Товары</option>
        <option>Хоз товары</option>
    </select>
    <p>Price</p>
    <input type="number" name="price">
    <br>
    <br>
    <button type="submit">Добавить</button>

</form>
