<?php
// setting up parse
require 'vendor/autoload.php';
use Parse\ParseClient; 
ParseClient::initialize('iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh', 'FfSUpIpOqNspjzvlemFxLsLzzxll853U2aMcQJk0', 'cSaozrm7v5JYpLvG9E0ij3OXqCMn7judZtaJ02NS');

use Parse\ParseObject;

date_default_timezone_set('America/New_York');

$required_fields = array('age', 'gender', 'email', 'dream');
$missing_a_field = false;
foreach ($required_fields as $field) {
	if (empty($_POST[$field])) {
		$missing_a_field = true;
	}
}

if ($missing_a_field) {
	echo "All fields are required!<br>";
}
else {
	$name = empty($_POST['name']) ? 'Anonymous' : $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$dream = $_POST['dream'];
	$new_dream = new ParseObject("Dream");
	$new_dream->set("name", $name);
	$new_dream->set("age", $age);
	$new_dream->set("gender", $gender);
	$new_dream->set("email", $email);
	$new_dream->set("dream", $dream);
	$new_dream->set("likes", 0);

	$new_dream->set("dream_id", rand(1,10));

	try {
	  $new_dream->save();	
	  echo 'New dream created with objectId: ' . $new_dream->getObjectId() . "<br>";
	} 
	catch (ParseException $pe) {
		echo $pe->getMessage() . "<br>";
	}

	$headers = "From: $name<$email>\r\n";
	$msg = "Testing";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you</title>
</head>
<body>

	<?php 
		$filename = "SaveInfo.txt";
		$email_msg = "Thank you $name for submitting your dream.\n\n";

    	// $isItExisting = (file_exists($filename));

 		$handle = fopen($filename, 'w');
		use Parse\ParseQuery;


		// $keywords = explode(" ", $dream);
		// foreach ($keywords as $word) {
		// 	$query = new ParseQuery("Keywords");
		// 	$query->equalTo("symbol", "$word");
		// 	$results = $query->find();
		// 	echo "Successfully retrieved " . count($results) . " symbol.";


		// 	$msg = "$word means: ";
		// 	$email_msg .= "$word means: \n";
		// 	echo "<p>$msg</p>";

		// 	$msg .= "\n";
		// 	fwrite($handle, $msg);


		// 	for ($i = 0; $i < count($results); $i++) { 
		// 		  $object = $results[$i];
		// 		  $msg = $object->get('meaning');
		// 		  echo $msg;


		// 		  $msg .= "\n";
		// 		  fwrite($handle, $msg);
		// 		  $email_msg .= $msg;

		// 	}
		// 	echo "</p>";
		// 	$email .= "\n";
		// }


		$msg = "Thanks for sharing your dream: \n";
		$msg .= $dream;
		fwrite($handle, $msg);


		fclose($handle);
		echo "<p>Saved dream to $filename</p>";


		mail($email, 'Your Dream', $email_msg, $headers);
		echo "<p>Sent email to $email</p>";
	 ?>

	Thanks man. We sent you an email with your dream
</body>
</html>