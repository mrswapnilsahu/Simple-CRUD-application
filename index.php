<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	body{
		background-image: url("img/bg_img.jpg");
		width: 0 auto;
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.banner {
		height: 540px;
		max-width: 400px;
		margin: 60px auto 40px auto;
		background-color: rgba(20,25,40,0.5);
		display: flex;
		/*border-radius: 20px;*/
	}

	.center-me {
		color: #FFF;
		/*font-size: 50px;*/
		margin: auto;
	}
</style>
</head>
<body>

	<div class="container">
		<div class="banner rounded">
			<div class="center-me">
				<h3><center>CODE WARS</center></h3>
				<form method="POST" action="save.php">
					<div class="form-group">
						<label for="username">Name</label>
						<input type="username" class="form-control" id="username" placeholder="Enter name" name="username" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
					</div>
					<div class="form-group">
						<label for="rollno">Enrollment no.</label>
						<input type="text" class="form-control" id="enr_no" placeholder="Enter Enrollment no." name="enr_no" required>
					</div>
					<div class="form-group">
						<label for="event">Select Event</label>
						<select class="form-control" id="event" name="event" required>
							<option selected>Choose Event</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="form-group">
						<label for="branch">Select Branch</label>
						<select class="form-control" id="branch" name="branch" required>
							<option selected>Select Branch</option>
							<option value="cse">CSE</option>
							<option value="it">IT</option>
							<option value="ec">EC</option>
							<option value="me">ME</option>
							<option value="ce">CE</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-success" style="width:300px;">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
