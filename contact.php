		<?php require_once 'controller/db.php'; ?>
		<th></th>
		<!DOCTYPE html>
		<html lang="en">
		<?php require 'partials/head.php'; ?>
		<body id="page-top">
			<!-- Navigation-->
			<?php require 'partials/sidebar.php'; ?>
			<section class="resume-section" id="skills">
				<div class="col-lg-8">
					<div class="resume-section-content">
						<h2 class="mb-5">Contact</h2>
						<div class="subheading mb-3">To Contact admin panal!!</div>
						<br>
						<br>
						<br>
						<div class="subheading mb-3">Flow Down</div>
						<ul class="fa-ul mb-0">
							<li>
								<span class="fa-li"><i class="fas fa-check"></i></span>
								<a class="icon brands fa-facebook-f" href="#">Shanto Bepary</a>
							</li>
							<li>
								<a href="#" class="icon solid fa-envelope"><span class="fa-li"><i class="fas fa-check"></i></span>
								shantobepary575@gmail.com</a>
							</li>
							<li>
								<span class="fa-li"><i class="fas fa-check"></i></span>
								017xxxxxxx85
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 offset-lg-1">
						<form class="form-wrapper" action="controller/email-controller.php" method="post">
							<div class="form-group">	
								<label for="nama">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Your name">
							</div>
							<div class="form-group">	
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Email address">
							</div>
							<div class="form-group">	
								<label for="msg">Message</label>
								<textarea class="form-control" name="massage" placeholder="Your message"></textarea>
							</div>
							<button type="submit" name="send" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
						</form>
					</div>
				</div>
			</section>
			<script src="js/bootstrap.min.js"></script>
			<!-- Core theme JS-->
			<script src="js/scripts.js"></script>

		</body>
		</html>
