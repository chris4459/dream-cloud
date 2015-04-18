<!-- ***** Chris Lee ***** -->

<?php 
require 'vendor/autoload.php';
use Parse\ParseClient; 
ParseClient::initialize('iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh', 'FfSUpIpOqNspjzvlemFxLsLzzxll853U2aMcQJk0', 'cSaozrm7v5JYpLvG9E0ij3OXqCMn7judZtaJ02NS');
use Parse\ParseQuery;

$dream_objectID_arr = array();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Journals</title>
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/journal-style.css">
  <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.4.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/journal.js"></script>
  
</head>
<?php
  $fName = basename(__FILE__);
?>
<body>
<?php
	include("nav.php");
  $dream_id = 0;
?>

<div class="margin-top"></div>

<div class="row">
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
    <div class="col-sm-4">
      <div class="journal">
        <?php include "pull-dream.php"; ?>
      </div>
      <?php include "like-dream.php" ?>
    </div>
</div>

    <div class="refresh">
      <span class="glyphicon glyphicon-refresh" onClick="window.location.reload()"></span>
      <span class="sr-only" onClick="window.location.reload()"></span>
    </div>



<?php
    include("footer.php");
  ?>

	
</body>
</html>