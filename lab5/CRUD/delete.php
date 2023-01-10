<?php
$id = $_GET['id'];
$q = "DELETE FROM `dishes` WHERE id = $id";
$qq = mysqli_query($GLOBALS['connect'], $q);
header('location: index.php?page_layout=list');
?>