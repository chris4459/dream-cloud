<?php 
require 'vendor/autoload.php';
use Parse\ParseClient; 
ParseClient::initialize('iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh', 'FfSUpIpOqNspjzvlemFxLsLzzxll853U2aMcQJk0', 'cSaozrm7v5JYpLvG9E0ij3OXqCMn7judZtaJ02NS');
use Parse\ParseQuery;

$not_found = true;

$query = new ParseQuery("Dream");

$dream_likes;

while ($not_found) {
	$query->equalTo("dream_id", rand(1,10));
	$results = $query->find();
    $num_results = count($results);
	if ($num_results > 0) {
    	$object = $results[ rand(0, $num_results-1) ];

    	if (!in_array($object->getObjectId(), $dream_objectID_arr)) {
    		array_push($dream_objectID_arr, $object->getObjectId());
    		echo '<h4 class="dream-name"><a href="view.php?id='.$object->getObjectId().'">'.$object->get('name').'&nbsp;&nbsp;';
            echo '<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>';
            echo '</a></h4>';
    		echo '<blockquote class="blockquote-reverse"><p class="dream-content">'.$object->get('dream').'</p>';
            echo '<footer><cite title="Dreamer">'.$object->get('name').'</cite></footer>';
            echo '</blockquote>';
    		// echo $object->get('dream');

            $dream_likes = $object->get('likes');
    		$not_found = false;
            $dream_id++;
    	}
  	}
}


 ?>

