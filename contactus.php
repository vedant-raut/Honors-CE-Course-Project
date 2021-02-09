<?php
		include("includes/header.php");
		?>
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<h2>Contact Us</h2>
					<p class="text-muted">
						If you have any questions , please feel free to contact us.
					</p>
				</div>
				<form action="contactus.php" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="subject" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Message</label>
						<input type="text" name="message" required="" class="form-control">
					</div>
					<button type="submit" name="submit" class="btn btn-primary">
						<i class="fa fa-user" aria-hidden="true"></i> Send Message
					</button>
				</form>
			</div>
		</div>
		<?php
		include("includes/footer.php");
		?>
		<?php
		if (isset($_POST['submit'])) {
			$senderName=$_POST['name'];
			$senderEmail=$_POST['email'];
			$senderSubject=$_POST['subject'];
			$senderMessage=$_POST['message'];
			$receiverEmail="heypratham04@gmail.com";
			mail($receiverEmail, $senderName,$senderSubject, $senderMessage,$senderEmail);
			//customer mail
			$email=$_POST['email'];
			$subject="Welcome to our website";
			$msg="I will get you soon, thanks for sending email";
			$from="heypratham04@gmail.com";
			mail($email, $subject, $msg,$from);
			echo "<p> Your Mail Sent</p>";
					}
		  ?>