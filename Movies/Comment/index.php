
<?php include("../path.php");?>
<?php include(ROOT_PATH . "/App/controllers/user.php");

error_reporting(0); // For not showing any error

 if (isset($_POST['submit'])) { // Check press or not Post Comment Button
 	$name = $_SESSION['username']; // Get Name from form
 	$email = $_SESSION['email']; // Get Email from form
 	$comment = $_POST['comment']; // Get Comment from form
	$user_id = $_SESSION['id'];
	$sql = "INSERT INTO comments (comment,  email, name,  userid )
 			VALUES ('$comment','$email', '$name','$user_id')";
 	$result = mysqli_query($conn, $sql);
	if ($result) {
      // 		echo "<script>alert('Comment added successfully.')</script>"; -->
 	} else {
     // 		echo "<script>alert('Comment does not add.')</script>"; -->
	}
 }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Comment </title>
</head>
<body style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('f-1.jpg');">
	<div class="wrapper">
		<form action="index.php" method="POST" class="form">
			<div class="row">
				
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button> 
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php
			  }
			}			
			?>
		    <a href="../index.php"class="back-home">Home</a>
		</div>
	
	</div> 
	
</body>

</html>