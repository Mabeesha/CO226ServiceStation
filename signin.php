<!DOCTYPE html>
<html>
    <head>
	<title>Sign In</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style_signup.css">
    
    </head>
<body>

	<?php            
            
            // ========== make the link to db and add the query here ! 
            // ================ change the db =============================
            $database= 'servicestations';
            $db = mysqli_connect('localhost','root','',$database)
            or die('Error connecting to MySQL server.');
    
            // ================ query =============================
            $table1 ='stationInfo';
    
            // if user name and passwrd match do qeury to update info       
      
            $userName=$_GET["user-name"];
            $paswd=$_GET["acc-password"];
            
            $query = "SELECT user_name,acc_password FROM $table1 WHERE user_name = '".$userName."' && acc_password = '".$paswd."'   ";
    
            mysqli_query($db, $query) or die ('Error querying the DB.');
	        $result = mysqli_query($db, $query);
    
            if (mysqli_num_rows($result) > 0) {              
                header("Location: ManageServiceStation.php?varname=$userName");
               // exit;
            } else {                
                echo "Login Failed";
            }       
            
	
	?>
</body>
</html>


