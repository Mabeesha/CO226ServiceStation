<!DOCTYPE html>
<html>
<body>

	<?php            
            session_start();
            // ========== make the link to db and add the query here ! 
            // ================ change the db =============================
            $database= 'co226project';
            $db = mysqli_connect('localhost','root','',$database)
            or die('Error connecting to MySQL server.');
    
            // ================ query =============================
            $table1 ='serviceStationInfo';

    
            // if user name and passwrd match do qeury to update info
            $userName=$_GET["user-name"];
            $paswd=$_GET["acc-password"];
            
            $query = "SELECT user_name,acc_password,station_id FROM $table1 WHERE user_name = '".$userName."' && acc_password = '".$paswd."'   ";
            
    
    
            mysqli_query($db, $query) or die ('Error querying the DB.');
	        $result = mysqli_query($db, $query);
            
            $row = mysqli_fetch_array($result);
            
            //note the difference between mysql and mysqli
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "Login Successful";
                  //header('Location: updateInfo.php?stationId='.$row['station_id']);
                header('Location: updateInfo.html');
                    exit;
            } else {
                
                echo "Login Failed";
            }
    
    
            
	
	?>
</body>
</html>