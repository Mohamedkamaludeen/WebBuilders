<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<form action="connection.php" method="post">
			<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="images/contact-us.jpg" alt="contact_us image">
					</div>
					<div class="col-md-6">
						<form method="post">
						<h2>Contact Us..</h2>
						<label>Name :</label>
						<input type="text" class="form-control" name="name" placeholder="Name">
						<label>Mobile :</label>
						<input type="number" class="form-control" name="mobile" pattern="[1-9]{1}[0-9]{9}" placeholder="Mobile">
						<label>Email :</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
						<label>City :</label>
						<input type="text" class="form-control" name="city" placeholder="City">
						<label>Message :</label>
						<textarea class="form-control" name="message" placeholder="Your Name"></textarea>
						<button type="submit" class="btn btn-primary" name="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
			</section>
		</form>
	</body>
</html>