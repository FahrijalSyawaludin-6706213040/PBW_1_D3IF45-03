<html>
	<body>
		<?php
			echo "Thanks, <b>". $_POST["name"]."</b><br>"; 
			echo "Your email is:, ".$_POST["email"]."<br>";
			echo "Your website is ".$_POST["website"]."<br>"; 
			echo "Comment ".$_POST["comment"]."<br>";
			echo "You are ".$_POST["gender"]; ?>
	</body>
</html>