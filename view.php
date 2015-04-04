<?php 
require 'vendor/autoload.php';
use Parse\ParseClient; 
ParseClient::initialize('iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh', 'FfSUpIpOqNspjzvlemFxLsLzzxll853U2aMcQJk0', 'cSaozrm7v5JYpLvG9E0ij3OXqCMn7judZtaJ02NS');

$objectID = $_GET['id'];
echo "$objectID";

use Parse\ParseQuery;



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
	echo "<p>Name: $name</p>";
	echo "<p>Age: $age</p>";
	echo "<p>Gender: $gender</p>";
	echo "<p>Dream: $dream</p>";
	echo "<p>Likes: $likes</p>";
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>