<?php session_start(); // place it on the top of the script ?>
<?php
/*
Subscribe to our newsletter page
*/
	
	$msg = '';
	$msgClass = '';


	if(filter_has_var(INPUT_POST, 'submit')){

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);

		if(!empty($name) && !empty($email)){
			//Passed
			//Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = 'Please fill in a valid email';
			$msgClass = 'alert-danger';
			} else {
				// PASSED
				// My email
				$toEmail = 'rotimiibitoybest@yahoo.co.uk';
				$subject = 'Newsletter '. $name;
				$body = '<h2>'.$name.' has Just subscribed to your news letter</h2>
					<h3>Here are the details: </h3>
					<h4> Name</h4><p>'.$name.' </p>
					<h4> Email</h4><p>'.$email.' </p>
				';
				//Headers
				$headers = "MIME-version: 1.0" . "\r\n";
				$headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";

				//Additional Headers
				$headers .= "From: " .$name. "<" .$email. ">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)) {
					$msg = 'Thank you for subscribing, You are welcome to the Tech family. ';
					$msgClass = 'alert-success';
				} else {
					$msg = 'Session out. Please try again Later';
					$msgClass = 'alert-danger';
				}
			}


	 } else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<?php include('inc/header.php'); ?>

<section id="main">
		<div class="container">
				<article id="main-col">
					<h2>Subscribe to our news letter</h2>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
						<h3>Name: </h3>
						<input type="text" placeholder="Enter Name.." name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
						<h3>Email: </h3>
						<input type="email" placeholder="Enter Email.." name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>

						<button type="submit" class="" name="submit" >Subscribe</button>
					</form>
					<?php if($msg != ''): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
		<?php endif; ?>
				</article>

					
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