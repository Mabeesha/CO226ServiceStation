<!DOCTYPE html>
<?php
// ================ change the db =============================
 $db = mysqli_connect('localhost','root','','ServiceStations')
 or die('Error connecting to MySQL server.');

?>

<html>
<head>
	<title>Updating</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    
</head>
<body>        
    
    <?php
    
       $user_name = $_GET['user_name'];
    
        if(strlen($_GET["state"]) > 0){
            $stationState = $_GET['state'];
    
            $update = "UPDATE stationInfo SET station_state='".$stationState."' WHERE user_name='".$user_name."'";
	         
            if(!mysqli_query($db,$update)){
                echo 'Not Updated !';
            }else{
                echo 'Updated';
                header("Location: ServiceStationList.php ");
                exit;
            }    
        }else{
            echo "No Input Vlues !";
        }
         
    
    ?>
    
    
      
            
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

</body>
</html>