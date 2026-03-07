<?php

$conn = new mysqli("localhost","root","","cms_blog");

$post_id = $_POST['post_id'];
$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "INSERT INTO comments(post_id,name,comment)
VALUES('$post_id','$name','$comment')";

$conn->query($sql);

header("Location:view_post.php?id=$post_id");

?>