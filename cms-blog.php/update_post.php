<?php

$conn = new mysqli("localhost","root","","cms_blog");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$conn->query("UPDATE posts SET title='$title',content='$content' WHERE id=$id");

header("Location:index.php");

?>