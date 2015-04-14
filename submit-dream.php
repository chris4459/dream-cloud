<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Submit Dream</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/submit-dream-style.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="css/submit-dream-style-alt.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<?php
  $fName = basename(__FILE__);
?>
<body>
	<?php
		include("nav.php");
	?>
	<div class="margin-top"></div>
	<!-- <div class=""> -->
		<form name="dreamform" class="form-horizontal" action="process.php" onsubmit="return validate_form();" method="POST">
			<div class="form-group orange-row">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
		      		<input type="text" class="form-control" id="name" placeholder="Anonymous" name="name">
		    	</div>
			</div>
			<div class="form-group brown-row">
				<label for="age" class="col-sm-2 control-label">Age</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="age" placeholder="Age" name="age">
					<span class="glyphicon glyphicon-asterisk"></span>
				</div>
			</div>
			<div class="form-group orange-row">
				<label class="col-sm-2 control-label">Gender</label>
				<div class="col-sm-10">
					<label for="gender-male" class="col-sm-2 control-label gender-label">Male
						<input type="radio" name="gender" id="gender-male"  value="male">
					</label>
					<label for="gender-female" class="col-sm-2 control-label gender-label">Female
				      	<input type="radio" name="gender" id="gender-female"  value="female">
				      </label>
				      <span class="glyphicon glyphicon-asterisk" id="gender-asterick"></span>
				</div>
			</div>
			<div class="form-group brown-row">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
			  		<input type="email" class="form-control" id="email" placeholder="Email" name="email">
			  		<span class="glyphicon glyphicon-asterisk"></span>
				</div>
			</div>
			<div class="form-group orange-row">
				<label for="dream" class="col-sm-2 control-label">
					<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
					Dream
				</label>
				<div class="col-sm-10">
			  		<textarea name="dream" id="dream" rows="10" placeholder="Explain your dream"></textarea>
			  		<span class="glyphicon glyphicon-asterisk" id="dream-asterisk"></span>
				</div>
				<div class="col-sm-offset-2 col-sm-10 submit-button">
			  		<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>


		<script src="js/validate_form.js"></script>
	<!-- </div> -->

	<?php
		include("footer.php");
	?>
</body>
</html>