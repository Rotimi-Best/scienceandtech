<?php
/*
index.php
*/
	require('config/config.php');
	require('config/db.php');
// Create Query

	/*
	   if (isset($_POST['email'])) {	 
		   	$to = "$_POST['email']";
			$subject = "Thank you for Subscribing";
			$message = "";
			mail($to, $subject, $message);

			$your_email = "rotimiibitoyebest@yahoo.co.uk";
			$subject_to_you = "someone subscribed to your news letter";
			$message_to_you = "";
			mail($your_email, $subject_to_you, $message_to_you);
			

}
*/

?>

<?php include('inc/header.php'); ?>
<section class="slideshow-container">

		<div class="mySlides fade">		 
		  	<img class="resize" src="./image/showcase1.png" style="width:100%" height="650">
		</div>

		<div class="mySlides fade">
		  	<img class="resize" src="./image/showcase3.jpg" style="width:100%" height="650">
		</div>

		<div class="mySlides fade">
		  	<img class="resize" src="./image/showcase.jpg" style="width:100%" height="650">
		</div>

		<div class="mySlides fade">
		  	<img class="resize" src="./image/showcase4.jpg" style="width:100%" height="650">
		</div>
		<div style="text-align:center" class="slidedot">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

</section>



<section id="newsletter">
		<div class="container">
			<h1>Subscribe to our news letter  </h1>
			<h2> <a href="Subscribe.php">Click here</a></h2>
		</div>
</section>


	<section id="boxes">
		<div class="container">
			<div class="box">
				<a href="/pages/bigstories.php"> <img src="./Image/newsicon.png" > </a> 
				<h3> <a href="<?php echo 'bigstories.php'; ?>"> News / Big Story </a></h3>
				<p> Stories you have never encountered before. The hottest and latest latest Technology News from all around the world. </p>				
			</div>

			<div class="box">
				<a href="/pages/startup.php"> <img src="./Image/startup.png"> </a>
				<h3> <a href="<?php echo 'startup.php'; ?>"> Start Ups </a> </h3>
				<p> 51 percent of owners of small businesses are 50-88 years old, 33 percent are 35-49 and only 16 percent are 35 years old and under. 69 percent of U.S. entrepreneurs start their businesses at home. Read more about STARTUPS in this section </p>				
			</div>

			<div class="box">
				<img src="./Image/gadget.png">
				<h3>  <a href="<?php echo 'gadget.php'; ?>"> Gadgets and Apps</a> </h3> 
				<p> Nearly two-thirds of Americans are now smartphone owners, and for many these devices are a key entry point to the online world. Read more about Gadgets and Apps in this section</p>				
			</div>
	
		</div>		
	</section>

	<section id="videos">
		<div class="videocontainer">
			<div class="text">
				<h2>Learn How to build a website</h2>
				<p>This video will get you started with building a website. If you desire to become your own web developer, you are just one click away from that! ENJOY THE VIDEO.</p>
			</div>
			<div class="text-video">
				<iframe width="680" height="400" src="https://www.youtube.com/embed/3JluqTojuME" frameborder="0" allowfullscreen></iframe>
			</div>


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

	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
