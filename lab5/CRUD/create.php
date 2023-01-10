<?php
$query = "SELECT * FROM `dishes`";
$res = mysqli_query($GLOBALS['connect'], $query);
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];
    $q = "INSERT INTO flowers (name, price, descr) VALUES ('$name', '$price', '$descr')";
    $qu = mysqli_query($GLOBALS['connect'], $q);
    header('location: index.php?page_layout = list');
}
?>

<div class = "prod-content">
    <div class = "content-name">
        <h1>Добавить новое блюдо</h1>
    </div>
    <div class = "prod-list" >
        <form method = "POST"  enctype="multipart/form-data">
            <div class = "items">
                <label for = "cr">Название</label>
                <textarea id = "cr" rows="1" name = "name" class="form-control" required></textarea>
            </div>
            <div class = "items">
                <label for = "cr">Цена</label>
                <input id = "cr" type = "number" name = "price" class="form-control" required>
            </div>
            <div class = "items">
                <label for = "cr">Состав</label>
                <textarea id = "cr" rows="3" name = "descr" class="form-control" required></textarea>
            </div>
            <button name = "submit" type = "submit">Сохранить</button>
        </form>
    </div>
</div>