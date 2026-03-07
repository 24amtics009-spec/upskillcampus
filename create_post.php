<!DOCTYPE html>
<html>

<head>

<title>Create Blog</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">
<br>
<h2>Create Blog Post</h2>
<br><hr>

<form action="insert_post.php" method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Blog Title" required>
<br>
<br>

<select name="category" required>
<br>
<br>

<option value="">Select Category</option>

<option value="Technology">Technology</option>

<option value="Travel">Travel</option>

<option value="Food">Food</option>

<option value="Lifestyle">Lifestyle</option>

<option value="Education">Education</option>

</select>
<br>
<br>

<textarea name="content" placeholder="Write blog..." required></textarea>
<br>
<br>

<div id="drop-area">

<p>Drag & Drop Image Here</p>
<p>or</p>

<input type="file" name="image" id="fileInput" required>

</div>

<button type="submit">Publish</button>

</form>

</div>
<script>

let dropArea = document.getElementById("drop-area");
let fileInput = document.getElementById("fileInput");

dropArea.addEventListener("dragover", function(e){
e.preventDefault();
dropArea.classList.add("dragover");
});

dropArea.addEventListener("dragleave", function(){
dropArea.classList.remove("dragover");
});

dropArea.addEventListener("drop", function(e){
e.preventDefault();
dropArea.classList.remove("dragover");

fileInput.files = e.dataTransfer.files;
});

</script>
</body>

</html>