<!doctype html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="styles.css" type="text/css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>G-Cordova-pwp</title>
	</head>

	<body>
<div>


		<div>
			<nav class="container navbar mt-3 mb-3">
			<a class="navbar-brand"></a>
			<a href="https://github.com/">GitHub</a>
			<a href="https://google.com/">Email</a>
			<a href="https://www.linkedin.com/"">Linkedin</a>
			<a href="https://twitter.com/"">Twitter</a>
			</nav>
		</div>



		<div id="landing" class="view">
		<div class="mt-3">
			<div class="container-fluid">
				<div class="jumbotron container">
					<h1 class="display-3">Kick-start your business!</h1>
					<p class="lead">
						Are you a small business looking to build a digital presence to get you the exposure you need to grow? Is there a problem that your facing in your operations as a business? Or, are do you simply hold a passion that you are looking to exhibit to the entire world? No matter your needs, we at Apex Development Services can make that possible.
					</p>
					<hr class="my-2">
					<p>Contact us below for a free consultation!</p>
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="#contactme" data-toggle="modal">Contact us!</a>
					</p>
				</div>
			</div>
		</div>
		</div>

	<div class="container marketing mt-3 py-">
		<div class="row">
			<div class="col-lg-4 text-center">
				<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto" src="rawpixel-550994-unsplash.jpg" alt="">
				<div class="card">
					Digital Marketing & Social Media - Whether you are looking to just create a Social Media presence via Instagram, or looking to grow you customer base; we can help!
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto" src="rawpixel-649916-unsplash (1).jpg" alt="">
				<div class="card">
					Maintenance - If you already have a website that you are seeking assistance or various maintence services on the site, we do provide maintenece service varying based on each specific case. Regardless, of the platform initially being used; we can help!
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto" src="riccardo-annandale-140624-unsplash.jpg" alt="">
				<div class="card">
					Front-End & Back-End Development - We do provide services to develop both websites that aim to intrigue potential customers, as well as to assist with creating platforms to help your business run smoother and potentially increase your profit margin!
				</div>
			</div>
		</div>
	</div>

<footer>
	<div class="sticky-footer text-center text-light bg-dark pt-2 pb-0 m-0 fixed-bottom">
		<p>
			<a href="https://github.com/G-Cordova/" target="_blank"><i class="fab fa-github fa-2x text-light"></i></a>
			<a href="https://www.linkedin.com/in/g-cordova-13993415a/" target="_blank"><i class="fab fa-linkedin fa-2x text-light"></i></a>
			<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square fa-2x text-light"></i></a>
		</p>
	</div>
</footer>

	<div class="modal fade" id="contactme" role="dialog" method="post" action="php/mailer.php">
			<div class="modal-dialogue">
				<div class="modal-content">
					<form class="form-horizontal"  role="form">
						<div class="modal-header">
							<h4>Contact</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="contact-name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" name="form-control" id="contact-name" placeholder="Your Name">
								</div>
							</div>
						</div>
							<div class="form-group">
								<label for="contact-email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="form-control" id="contact-email" placeholder="example@domain.com">
								</div>
							</div>
							<div class="form-group">
								<label for="contact-message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<input type="text" name="form-control" id="contact-name" placeholder="Your Message here...">
								</div>
							</div>

						<div class="g-recaptcha" data-sitekey="6LdEaVwUAAAAAIc5peS7onDxa1W8zSZhrSr0x9PH"></div>
						<button class="btn btn-info" type="submit">Submit</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</form>


				</div>
			</div>
		</div>




		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>


