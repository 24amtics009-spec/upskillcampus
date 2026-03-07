<?php
$conn = new mysqli("localhost","root","","cms_blog");
$result = $conn->query("SELECT * FROM posts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>

<title>Content Management System For a Blog</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">

<h2>Content Management System For a Blog</h2>

<a href="create_post.php">
<button>Create Post</button>
</a>

</div>

<div class="container">

<?php while($row = $result->fetch_assoc()){ ?>

<div class="post">

<h2><?php echo $row['title']; ?></h2>
<p class="category"><?php echo $row['category']; ?></p>
<img src="uploads/<?php echo $row['image']; ?>">

<p><?php echo substr($row['content'],0,150); ?>...</p>

<a href="view_post.php?id=<?php echo $row['id']; ?>">
<button>Read More</button>
</a>

<a href="delete_post.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete post?')">
<button class="delete">Delete</button>
</a>

</div>

<?php } ?>

</div>

</body>
</html>