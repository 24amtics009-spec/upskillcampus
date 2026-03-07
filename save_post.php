<!-- (Save blog into MySQL) -->
<?php

$conn = new mysqli("localhost","root","","cms_blog");

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO posts(title,content)
VALUES('$title','$content')";

$conn->query($sql);

header("Location:index.php");

?>