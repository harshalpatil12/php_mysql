<?php 

include 'config.php';

error_reporting(0); 
 
if (isset($_POST['name'])) { 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$comment = $_POST['comment']; 

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment not added.')</script>";
	}
}
header("Location: http://localhost/comment");
exit();
?>