<?php 
require 'vendor/autoload.php';
use Parse\ParseClient; 
ParseClient::initialize('iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh', 'FfSUpIpOqNspjzvlemFxLsLzzxll853U2aMcQJk0', 'cSaozrm7v5JYpLvG9E0ij3OXqCMn7judZtaJ02NS');
use Parse\ParseQuery;
$objectID = $_GET['id'];





$query = new ParseQuery("Dream");
$query->equalTo("objectId", $objectID);
$results = $query->find();

if (count($results)) {
	$name = $results[0]->get('name');
	$age = $results[0]->get('age');
	$gender = $results[0]->get('gender');
	$dream = $results[0]->get('dream');
	$likes = $results[0]->get('likes');
	$likes += 0;
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/view-style.css">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.4.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/view.js"></script>
</head>
<body>
	<?php
		$fName = basename(__FILE__);
		include("nav.php");
	?>
 	<div class="margin-top"></div>
 	<!-- <div class="body-wrapper"> -->

	<div id="dream-body">
		<div id="dream-name">
			<?php echo $name; ?>
		</div>
		<div id="dream-info">
			<span id="gender-info">
				Gender:
				<?php echo $gender; ?>
			</span>
			<span class="glyphicon glyphicon-option-vertical"></span>
			<span>
				Age:
				<?php echo $age; ?>
			</span>
			<span class="glyphicon glyphicon-option-vertical"></span>
			<span>
				<span class="glyphicon glyphicon-heart" id="heart-like" onclick= <?php echo "increment_likes(\"".$objectID."\");" ?>></span>
				<span id="dream_likes">
				<?php echo $likes; ?>
				</span>
			</span>
		</div>
		<div id="dream-content">
			<div id="dream-cloud"><span class="glyphicon glyphicon-cloud"></span></div>
			<div id="dream-desc"><?php echo $dream; ?></div>
		</div>	
	</div>
	<div id="back">
		<span class="glyphicon glyphicon-backward" onclick="goBack()"></span>
	</div>
	
	<?php
		include("footer.php");
	?>
	<script>
		function goBack() {
		    window.history.back();
		}
	</script>
</body>
</html>