<?php
/*
Feedback page
*/
	require('config/config.php');
	require('config/db.php');
// Create Query
$query = 'SELECT * FROM feedback';

$result = mysqli_query($conn, $query);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);


?>

<?php include('inc/header.php'); ?>

	<section id="main">
		<div class="container">
				<article id="main-col">
					<h2>Feedbacks from All our Visitors</h2>					
					<?php foreach($feedback as $feedback) : ?>	<div class="well">			
							<p>Name: <?php echo $feedback['name']?></p>
							<p>Comment: <?php echo $feedback['comment']?></p>
							</div>

				<?php endforeach; ?>

					
						
				</article>	
				<?php include('inc/sidebar.php'); ?>	
		</div>		
	</section>

		<?php include('inc/footer.php'); ?>