<!doctype html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
				integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
				integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<link rel="stylesheet" href="css/styles.css" type="text/css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
				  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
				  crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
				  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
				  crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>G-Cordova-pwp</title>
	</head>

	<body>
		<div>


			<div id="navigate">
				<nav class="container navbar my-3">
					<a class="navbar-brand"></a>
					<div class="col-md">
						<a href="https://github.com/">GitHub</a>
					</div>
					<div class="col-md">
						<a href="https://google.com/">Email</a>
					</div>
					<div class="col-md">
						<a href="https://www.linkedin.com/">Linkedin</a>
					</div>
					<div class="col-md">
						<a href="https://twitter.com/">Twitter</a>
					</div>
				</nav>
			</div>


			<div id="container-fluid" class="view">

			</div>

			<div id="landing" class="view">
				<div class="mt-3">
					<div class="container-fluid">
						<div class="jumbotron container">
							<h1 class="display-3">Kick-start your business!</h1>
							<p class="lead">
								Are you a small business looking to build a digital presence to get you the exposure you need to
								grow? Is there a problem that your facing in your operations as a business? Or, are do you
								simply hold a passion that you are looking to exhibit to the entire world? No matter your needs,
								we at Apex Development Services can make that possible.
							</p>
							<hr class="my-2">
							<p>Contact us below for a free consultation!</p>
							<p class="lead">
								<a class="btn btn-primary btn-lg" data-target="#contact-modal" data-toggle="modal">Contact us!</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="container marketing mt-3 py-">
				<div class="row">
					<div class="col-lg-4 text-center">
						<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto"
							  src="rawpixel-550994-unsplash.jpg" alt="">
						<div class="card">
							Digital Marketing & Social Media - Whether you are looking to just create a Social Media presence
							via Instagram, or looking to grow you customer base; we can help!
						</div>
					</div>
					<div class="col-lg-4 text-center">
						<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto"
							  src="rawpixel-649916-unsplash%20(1).jpg" alt="">
						<div class="card">
							Maintenance - If you already have a website that you are seeking assistance or various maintenance
							services on the site, we do provide maintenance service varying based on each specific case.
							Regardless, of the platform initially being used; we can help!
						</div>
					</div>
					<div class="col-lg-4 text-center">
						<img class="img-thumbnail rounded-circle d-flex align-center rounded mx-auto"
							  src="images/riccardo-annandale-140624-unsplash.jpg" alt="">
						<div class="card">
							Front-End & Back-End Development - We do provide services to develop both websites that aim to
							intrigue potential customers, as well as to assist with creating platforms to help your business
							run smoother and potentially increase your profit margin!
						</div>
					</div>
				</div>
			</div>

			<!--	FOOTER -->
			<footer>
				<div class="sticky-footer text-center text-light bg-dark pt-2 pb-0 m-0">
					<p>
						<a href="https://github.com/G-Cordova/" target="_blank"><i class="fab fa-github fa-2x text-light"></i></a>
						<a href="https://www.linkedin.com/in/g-cordova-13993415a/" target="_blank"><i
								class="fab fa-linkedin fa-2x text-light"></i></a>
						<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square fa-2x text-light"></i></a>
					</p>
				</div>
			</footer>

			<!--	CONTACT FORM -->
			<div id="contact-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Contact</h4>
						</div>
						<div class="modal-body">



							<form class="form-horizontal" role="form" id="contact-me" method="post" action="php/mailer.php">

								<div class="form-group">
									<label for="contactName" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" name="contactName" id="contactName" placeholder="Your Name">
									</div>
								</div>

								<div class="form-group">
									<label for="contactEmail" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" name="contactEmail" id="contactEmail" placeholder="example@domain.com">
									</div>
								</div>

								<div class="form-group">
									<label for="contactMessage" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-10">
										<textarea name="contactMessage" id="contactMessage" placeholder="Your Message here..."></textarea>
									</div>
								</div>

								<div class="g-recaptcha" data-sitekey="6LdEaVwUAAAAAIc5peS7onDxa1W8zSZhrSr0x9PH"></div>
								<button class="btn btn-info" type="submit">Submit</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</form>

							<div id="output-area"></div>

						</div>
					</div>
				</div>
			</div>
	</body>
</html>


