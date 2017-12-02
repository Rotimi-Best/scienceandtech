<?php
/*
The reply from the feeback page
*/
	require('config/config.php');
	require('config/db.php');
// Create Query
$query = 'SELECT * FROM feedback';

$result = mysqli_query($conn, $query);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);



?>

<?php include('inc/header.php'); ?>

	<section id="main">
		<div class="container">
				<article id="main-col">
					<h2>Thank you for your feedback</h2><br>

					<h3>View Your FeedBack - <a href="feedback.php">Here </a></h3>						
				</article>	
				<?php include('inc/sidebar.php'); ?>	
		</div>		
	</section>

		<?php include('inc/footer.php'); ?>