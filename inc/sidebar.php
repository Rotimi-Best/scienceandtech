<?php
//mysqli_select_db($conn, "feedback");
/*
Here is the side bar
*/


if(isset($_POST['submit'])) {
$username = $_POST['name'];
$comment = $_POST['comment'];

$comment_length = strlen($comment);

if($comment_length > 100) {
	header("location: index.php?error=1");
} else
{
	$query = "INSERT INTO `feedback` (name, comment) VALUES ('$username', '$comment')";

	return (mysqli_query( $conn, $query));
	
}
}
?>

<aside id="sidebar">
					<div class="dark">
						
						<img src="./image/welcome.jpg" >
						<h3>Welcome to Our Technology Site</h3>
						<p>We have had thousands of visitors share their experiences on our website. </p><br>
						<h3>Just Click</h3>

							<h3><a href="feedback.php">READ FEEDBACKS HERE</a></h3>
					</div>	

					<div class="dark">
						<h3>Give us a feedback</h3>
							<form class="feedback" action="thanksfeedback.php" method="POST">
								<div>
									<label>Name</label><br>
									<input type="text" placeholder ="Name" name="name" id="name" required>
								</div>

								<div>
									<label>Comment</label><br>
									<textarea placeholder="Your Comment........" id="comment" name="comment" required></textarea>
								</div>
								
								<input type="submit" name="submit" value="Submit">
							</form>
					</div>
					

				</aside>	