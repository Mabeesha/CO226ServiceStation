<!DOCTYPE html>
<html>
<body>

	<?php
		if(strlen($_GET["station-name"]) > 0 && strlen($_GET["user-name"]) > 0 && strlen($_GET["station-loc"]) > 0 &&
           strlen($_GET["acc-password"]) > 0 && strlen($_GET["contact-num"]) > 0){

			$station_name = $_GET["station-name"];
            $station_location = $_GET["station-loc"];
            $contact_num = $_GET["contact-num"];
            $user_name = $_GET["user-name"];
            $acc_password = $_GET["acc-password"];
            
            //$db = mysqli_connect('localhost','root','','ServiceStations')
            //        or die('Error connecting to MySQL server.');
            
            // ========== make the link to db and add the query here ! ========================
	
		}else{
			echo "Please Input Values";
		}
	
	?>
</body>
</html>