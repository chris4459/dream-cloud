<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container navbar-container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
					<img src="images/cloud-icon-72.png" alt="Cloud Icon">
				</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li
						<?php 
							if ($fName == 'submit-dream.php') {
								echo "class = 'active'";
							}
						 ?>
					><a href="submit-dream.php">Submit Dream</a></li>
					<li
						<?php 
							if ($fName == 'science.php') {
								echo "class = 'active'";
							}
						 ?>
					><a data-toggle="collapse" data-target=".navbar-collapse" href="science.php">Science</a></li>
					<li
						<?php 
							if ($fName == 'symbols.php') {
								echo "class = 'active'";
							}
						 ?>
					><a data-toggle="collapse" data-target=".navbar-collapse" href="symbols.php">Symbols</a></li>
					<li
						<?php 
							if ($fName == 'journal.php') {
								echo "class = 'active'";
							}
						 ?>
					><a data-toggle="collapse" data-target=".navbar-collapse" href="journal.php">Journal</a></li>
				</ul>	
			</div>
  		</div>
</nav>