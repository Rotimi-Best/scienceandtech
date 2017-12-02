<?php
/*
About page
*/
	require('config/config.php');
	require('config/db.php');
// Create Query
	$query = 'SELECT * FROM posts';

	// Get Result

	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// fREE Result
	mysqli_free_result($result);

	// Close connection
	mysqli_close($conn);

?>

	<?php include('inc/header.php'); ?>

	<section id="main">
		<div class="container">
				<article id="main-col">
					<h1 class="page-title">About Us	</h1>
					<img src="./image/vk4.jpg" width="500" >
					<p>WANT TO KNOW ABOUT ME AND THIS BLOG ? THEN READ ON!

You are welcome to My Website. The main focus of this blog is to get the best and latest technology based information that is making news.

My idea is fairly simple – to provide the latest and brief  updates in the world of technology and to share my ideas and other peoples ideas with folks just like you.

Name is Rotimi-Ibitoye Best,

Trained from Aptech, qualified as a MCSA(Microsoft Certified System Administrator). Hungry for knowledge and knowledge and more knowledge.

Before I started my internet marketing journey – I just recently completed my Secondary education but due to the various ideas i stumble upon daily, i have always longed to share them to the whole world .

It was rather by accident that I started to blog. I stumbled upon a website on the internet saying “create your website here for free”, definitely most of you would have seen that but as for those who hasn’t seen it, i found that on this website: http://www.simplesite.com. It looked so enticing and that’s how my world of blogging started.

But later After sometime of playing with that web tool, I decided to create something less amateurish and more professional. That something turned out to be the blog you are just reading. As I began publishing new content more consistently, the plan I have in mind is to share information in a more fun way.

I hope you enjoy the topics.</p>
				</article>	
				<?php include('inc/sidebar.php'); ?>	
		</div>		
	</section>

		<?php include('inc/footer.php'); ?>