<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index-style.css">
	<link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/typing.js"></script>
	<script src="js/jquery.typer.js"></script>
	<script src="js/typed.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
    
	<title>Dream Interpreter</title>
</head>
<?php
  $fName = basename(__FILE__);
?>

<body>
	<?php
	    include("nav.php");
	?>

 	<div class="margin-top"></div>
	<div class="container">
	<div class="page-header">
		<span id="caption"></span>
	</div>
	</div>


	<div class="type-wrap container">
        <span id="typed"></span>
    </div>


<?php include 'footer.php'; ?>


</body>
</html>