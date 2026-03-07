<?php

$conn = new mysqli("localhost","root","","cms_blog");

$id = $_GET['id'];

$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

<title><?php echo $post['title']; ?></title>
<p><b>Category:</b> <?php echo $post['category']; ?></p>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">
<br>
<br>

<h1><?php echo $post['title']; ?></h1>
<br>
<br>

<img src="uploads/<?php echo $post['image']; ?>">
<br>
<br>

<p><?php echo $post['content']; ?></p>
<br>

<hr>

<h3>Add Comment</h3>

<form action="add_comment.php" method="POST">

<input type="hidden" name="post_id" value="<?php echo $id; ?>">

<input type="text" name="name" placeholder="Your name" required>

<textarea name="comment" placeholder="Write comment" required></textarea>

<button type="submit">Post Comment</button>

</form>

<hr>

<h3>Comments</h3>

<?php

$comments = $conn->query("SELECT * FROM comments WHERE post_id=$id ORDER BY id DESC");

while($row = $comments->fetch_assoc()){

echo "<div class='comment-box'>";
echo "<b>".$row['name']."</b>";
echo  ":   ".$row['comment'];
echo "</div>";

}

?>

</div>

</body>

</html>