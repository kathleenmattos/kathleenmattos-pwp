<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script src ="js/script.js"></script>
		<title>KM PWP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lato|Nunito|Roboto:400,700" rel="stylesheet">

		<!--bootstrap css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!--bootstrap js-->
		<!--todo change slim to min-->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<!--dependencies for contact form-->
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

	</head>

	<body>
		<header>

			<!--              Navbar                   -->
			<!-- todo try sticky top and check out bootstrap examples-->
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar px-4 shadow-sm p-3 mb-5 bg-white">
				<a class="navbar-brand text-white" href="#">Kathleen Mattos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link text-white" href="#aboutMe">About Me <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#skills">Skills</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#contactWrapper">Contact Me</a>
						</li>
					</ul>
				</div>
			</nav>


			<!--                    Full page background image                       -->
			<div class="view d-flex align-items-center" id="backgroundImage">
				<!--Mask and flexbox-->
				<div class="align-items-center">
						<div class="container d-flex justify-content-center align-content-center">
							<div class="jumbotron">
									<h1 class="display-4 lead">Kathleen Mattos</h1>
									<h3 class="lead"> Web Developer</h3>
									<hr class="my-4">
							</div>
						</div>
				</div>
			</div>
		</header>

		<!--                   About Me                        -->
		<section id="aboutMe">
				<div class="container text-wrap py-5 px-5">
					<h3><strong>About Me</strong></h3>
					<hr>
					<p>Hello there! I am a web developer living in Rio Rancho, NM. I would love to use my skills to help my community, whether it be working for a company or freelancing for smaller projects. I have experience building websites from scratch and strive to make a clean, professional deliverable. I look forward to hearing what ideas you have so I can bring them to life for you! </p>
				</div>
		</section>

		<!--                   Skills                          -->
		<section id="skills">
			<div class="container text-wrap py-5 px-5">
					<h3><strong>Skills</strong></h3>
					<hr>

					<!--Add skill chart thing-->
					<div class="row text-center my-5">
						<div class="col-md-6">
							<h5><strong>Web Development/Design</strong></h5>
							<p>HTML, CSS, PHP, SQL, Bootstrap, JavaScript, Git version control, Agile Methodology, Object Oriented Programming, Adobe Photoshop, Adobe Illustrator, and vector graphics.</p>
						</div>
						<div class="col-md-6">
							<h5><strong>Soft Skills</strong></h5>
							<ul>
								<li>Problem Solving</li>
								<li>Adaptable</li>
								<li>Creative</li>
								<li>Highly Motivated</li>
								<li>Excellent Customer Service</li>
							</ul>
						</div>
					</div>
			</div>
		</section>

		<!--                 Portfolio                         -->
		<section id="portfolio">
			<div class="container text-wrap px-5 py-5">
				<h3><strong>Portfolio</strong></h3>
				<hr>
				<!--card deck-->
				<div class="row text-center my-5">
					<div class="col-md-4 p-3">
						<img class="rounded-circle my-3 img-fluid" src="images/comingSoon1.jpg" alt="Hidden Face One">
						<p class="bg-light border rounded text-wrap my-2 py-2">New projects coming soon!</p>
					</div>
					<div class="col-md-4 p-3">
						<img class="rounded-circle my-3 img-fluid" src="images/comingSoon2.jpg" alt="Cats Playing Beautiful Music">
						<p class="bg-light border rounded text-wrap my-2 py-2">New projects coming soon!</p>
					</div>
					<div class="col-md-4 p-3">
						<img class="rounded-circle my-3 img-fluid" src="images/comingSoon3.jpg" alt="Gentleman Cat">
						<p class="bg-light border rounded text-wrap my-2 py-2">New projects coming soon!</p>
					</div>
				</div>
			</div>
		</section>

		<!--             Contact Me                  -->
		<section id="contactWrapper">
			<div class="container-fluid contact-form py-5 px-5 text-wrap">
				<hr>
				<form id="contactMe" action="../PHP/mailer.php" method="post">
					<h3><strong>Send Me a Message</strong></h3>
					<div class="row mb-1">
						<div class="col-md-6">
							<div class="form-group">
								<div class="import-group">
									<input type="text" id="textName" name="textName" class="form-control" placeholder="Your Name *" />
								</div>
							</div>
							<div class="form-group">
								<input type="text" id="textEmail" name="textEmail" class="form-control" placeholder="Your Email *"/>
							</div>
							<div class="form-group">
								<input type="text" id="textSubject" name="textSubject" class="form-control" placeholder="Your Subject *"/>
							</div>
						</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="textMessage" id="textMessage" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
								</div>
							</div>
					</div>
						<div class="row justify-content-center py-1 my-2">
								<!-- reCAPTCHA -->
								<div class="g-recaptcha py-3" data-sitekey="6LfNEpQUAAAAAJn5K1m6H0vIcJAQPrhxBecfmqBE"></div>
						</div>
						<div class="row justify-content-center py-1 mt-1">
							<!--buttons-->
							<button class="btn btn-light mr-2" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-light ml-2" type="reset"><i class="fas fa-eraser"></i> Reset</button>
						</div>
				</form>
				<!--end contact form empty // area for form error/success output-->
				<div id="output-area"></div>
			</div>
		</section>

		<!--                  Find Me/ footer?                     -->
		<section id="findMe">
			<div class="container-fluid text-center text-white py-3">
				<div class="row d-flex justify-content-center align-items-center pl-2">
					<h4>Find Me</h4>
					<a href="https://github.com/kathleenmattos" class="ml-2 github"><span class="links"><i class="fab fa-github"></i></span></a>
					<a href="https://www.linkedin.com/in/kathleenmattos/" class="ml-2 linkedin"><span class="links"><i class="fab fa-linkedin"></i></span></a>
				</div>
			</div>
		</section>
	</body>
</html>

