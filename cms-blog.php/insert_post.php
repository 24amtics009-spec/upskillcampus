<?php

$conn = new mysqli("localhost","root","","cms_blog");

$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$sql = "INSERT INTO posts(title,content,image,category)
VALUES('$title','$content','$image','$category')";

$conn->query($sql);

header("Location:index.php");

?>