<!DOCTYPE html>
<html>
<body>

	<?php
		if(strlen($_GET["station-name"]) > 0 && strlen($_GET["user-name"]) > 0 && strlen($_GET["station-loc"]) > 0 &&
           strlen($_GET["acc-password"]) > 0 && strlen($_GET["contact-num"]) > 0){

			$station_name = $_GET["station-name"];
            $station_location = $_GET["station-loc"];
            $contact_num = $_GET["contact-num"];
            $station_specs = $_GET["Specifications"];
            
            $user_name = $_GET["user-name"];
            $acc_password = $_GET["acc-password"];
            
            
	       // ================ change the db =============================
            $database= 'co226project';
            //
            $db = mysqli_connect('localhost','root','',$database)
            or die('Error connecting to MySQL server.');
            
             // ================ change the table =============================
            $table1 ='serviceStationInfo';
 
            $insert="INSERT INTO $table1 VALUES (DEFAULT,'$station_name','$station_location','$station_specs','Free','$contact_num','$user_name','$acc_password')";
            
            if(!mysqli_query($db,$insert)){
                echo 'not inserted';
            }
            else{
                echo 'inserted';
                 header("Location: ServiceStationList.php ");
   exit;
            }            

            
		}else{
			echo "Please Input Values";
		}
	
	?>
</body>
</html>
