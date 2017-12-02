<?php
/*
Gadget page
*/
	require('config/config.php');
	require('config/db.php');

?>

<?php include('inc/header.php'); ?>


	<section id="showcase_gadget">
		<div class="container">
		<h1>Gadgets And Apps</h1>
			
			<marquee scrollamount="10"> <p></p> </marquee>
				
		</div>
	</section>

	



	<section id="main">
		<div class="container">
				<article id="main-col">
					<div class="list">
						<img src="./Image/disney-img.jpg" >	
				<h2> Circle with Disney raises $10 million for its parental control device for families </h2>
				<p> Circle Media, the company behind Circle with Disney – a device that helps parents enforce their 
					home’s internet rules and restrictions – has raised $10 million in Series A funding, the company announced
					this morning. The round was led by early stage venture fund Relay Ventures. There was another private 
					equity investment in the round, but the parties didn’t want to… <a href="disney.php"> Read more</a></p>
					</div>

					<div class="list">
						<img src="./Image/startup.png">
					<h2> Circle with Disney raises $10 million for its parental control device for families </h2>
					<p> Circle Media, the company behind Circle with Disney – a device that helps parents enforce their 
					home’s internet rules and restrictions – has raised $10 million in Series A funding, the company announced
					this morning. The round was led by early stage venture fund Relay Ventures. There was another private 
					equity investment in the round, but the parties didn’t want to… <a href="disney.php"> Read more</a></p>
					</div>

					<div class="list">
						<img src="./Image/startup.png">
					<h2> Circle with Disney raises $10 million for its parental control device for families </h2>
					<p> Circle Media, the company behind Circle with Disney – a device that helps parents enforce their 
					home’s internet rules and restrictions – has raised $10 million in Series A funding, the company announced
					this morning. The round was led by early stage venture fund Relay Ventures. There was another private 
					equity investment in the round, but the parties didn’t want to… <a href="disney.php"> Read more</a></p>
					</div>

					<div class="list">
						<img src="./Image/gadget.png">
					<h2> Circle with Disney raises $10 million for its parental control device for families </h2>
					<p> Circle Media, the company behind Circle with Disney – a device that helps parents enforce their 
					home’s internet rules and restrictions – has raised $10 million in Series A funding, the company announced
					this morning. The round was led by early stage venture fund Relay Ventures. There was another private 
					equity investment in the round, but the parties didn’t want to… <a href="disney.php"> Read more</a></p>
					</div>
					
					</article>	
					<?php include('inc/sidebar.php'); ?>	
		</div>		
	</section>
		<section id="arrangedpost">
		<div class="container">
		<h2>MORE <strong>STORIES</strong></h2>

			<div class="postx" onclick="window.open('http://cnet.com/news/apple-homepod-vs-amazon-echo-vs-google-home/', '_blank');">
				<a href="apple.php"><img src="./image/apple.jpg" class="image"></a>
				<div class="overlay">
    					<div class="text">Apple HomePod vs. Amazon Echo</div>
    					
  				</div>
  				<p><strong>Apple HomePod vs. Amazon Echo vs. Google Home </strong></p>
			</div>

			<div class="postx" onclick="window.open('http://cnet.com/products/amazon-fire-7/review/', '_blank');">
				<img src="./image/amazontab.jpg" class="image">
				<div class="overlay">
    					<div class="text">Amazon Fire 7 (2017) review.</div>
  				</div>
  				<p><strong>Amazon Fire 7 (2017) review. Latest from Amazon</strong></p>
			</div>

			<div class="postx" onclick="window.open('http://cnet.com/roadshow/auto/2018-lamborghini-huracan-performante/preview/', '_blank');">
				<img src="./image/lamborghini.jpg" class="image">
				<div class="overlay">
    					<div class="text">Lamborghini's Huracan Performante Lights.</div>
  				</div>
  				<p><strong>Lamborghini's Huracan Performante Lights.</strong></p>
			</div>

			<div class="postx" onclick="window.open('http://cnet.com/news/israel-hacked-isis-then-trump-shared-findings-with-russians/', '_blank');">
				<img src="./image/trump.jpg">
					<div class="overlay">
    					<div class="text">Israel reportedly hacked ISIS</div>
  					</div>
  					<p><strong>Israel reportedly hacked ISIS, then Trump told Russia</strong></p>
			</div>

		</div>
	</section>

		<?php include('inc/footer.php'); ?>