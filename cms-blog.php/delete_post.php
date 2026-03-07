<?php

$conn = new mysqli("localhost","root","","cms_blog");

$id = $_GET['id'];

$conn->query("DELETE FROM posts WHERE id=$id");

header("Location:index.php");

?>