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
          echo "<div class=\"panel\" id=\"thankyoubox\">";
          echo "<div class=\"panel-body\">Thank you $name for submitting your dream.</div>";
          echo "<div class=\"panel-body\">A copy of your dream has been emailed to you at {$email}. Check your spam.</div><br>";
          echo "<div class=\"panel-body\">You can view your dream, along with many other dreams, on the journal page.</div>";
          // echo 'New dream created with objectId: ' . $new_dream->getObjectId() . "<br>";
	} 
	catch (ParseException $pe) {
                echo "Dream failed to submit. Please go back and try again.<br>";
		echo $pe->getMessage() . "<br>";
	}

	$headers = "From: $name<$email>\r\n";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you</title>
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/process-style.css">
</head>
<body>
	<?php 
		$filename = "SaveInfo.txt";
		$email_msg = "Thank you $name for submitting your dream.\n\n";

 		$handle = fopen($filename, 'w');
		use Parse\ParseQuery;

		$msg = "Thanks for sharing your dream: \n";
		$msg .= $dream;
		fwrite($handle, $msg);


		fclose($handle);
                echo "<div class=\"panel-body\">Saved dream to $filename</div>";
                echo "<a href=\"index.php\"><img src=\"images/cloud-icon-72.png\" alt=\"Cloud Icon\"></a>";
                echo "</div>";

		mail($email, 'Your Dream', $email_msg, $headers);
	 ?>
</body>
</html>