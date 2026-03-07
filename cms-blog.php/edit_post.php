<?php
$conn = new mysqli("localhost","root","","cms_blog");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM posts WHERE id=$id");
$post = $result->fetch_assoc();
?>

<form action="update_post.php" method="POST">

<input type="hidden" name="id" value="<?php echo $post['id']; ?>">

<input type="text" name="title" value="<?php echo $post['title']; ?>">

<textarea name="content"><?php echo $post['content']; ?></textarea>

<button type="submit">Update</button>

</form>