<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index-style.css">
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
<!-- 	<audio  autoplay loop>
		  <source src="sound/Rain_Background.mp3" type="audio/mpeg" >
	</audio>
 -->	
 	<div class="margin-top"></div>

	<!-- <div class="element white-font"></div> -->
	<div class="container">
	<div class="page-header">
		<h1>
			<span id="caption"></span>
			<!-- <span id="cursor">|</span> -->
		</h1>
	</div>
	</div>


	<div class="type-wrap container">
		<h1>
            <span id="typed"></span>
        </h1>
     </div>





</body>
</html>