<div class="like-dream">
	<div class="like-dream-heart">
		<a href="#"><span class="glyphicon glyphicon-heart" id=<?php echo "heart_".$dream_id ?>></span></a>
		<span class="likes" id=<?php echo "dream_".$dream_id ?> >
			<?php echo $dream_likes + ""; ?>
		</span>
	</div>
	<?php 
		$dreamID = $dream_objectID_arr[$dream_id-1];
	?>
	<div class="like-dream-thumbs-up">
		<span class="glyphicon glyphicon-option-vertical"></span>
		<a  onclick= <?php echo "increment_likes($dream_id,\"".$dreamID."\");" ?>>
			<span class="glyphicon glyphicon-thumbs-up" id=<?php echo "thumbs_".$dream_id ?>></span>
		</a>
	</div>

</div>