<html>
<body>

<?php
	$Title = $_POST['title'];
	$file = $_FILES['myfile'];
	$Comment = $_POST['comment'];

	echo('Title:');
	echo($Title);
	echo($file);
	echo($Comment);
?>
</body>
</html>

SELECT * FROM anh_nguyen;