<?php
// ================ change the db =============================
    $database= 'co226project';
//
 $db = mysqli_connect('localhost','root','',$database)
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
     
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
         
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="ServiceStationList.js"></script>
     
 </head>
<div class="box-content" >

    <button id="btnHome"class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Home</button>
    </div>
 <body>

<?php
     // ================ change the table =============================
        $table1 ='serviceStationInfo';
     
     //
	$query = "SELECT * FROM $table1";
	mysqli_query($db, $query) or die ('Error querying the DB.');
	$result = mysqli_query($db, $query);
     
    echo "<br><br><table class='mdl-data-table mdl-js-data-table mdl-shadow--2dp' align='center'><thead><tr><th>Service Station</th><th>Location</th><th>Specifications</th><th>Availability</th><th>Contact Number</th></tr></thead><tbody>";

	while ($row = mysqli_fetch_array($result)) {
 		echo "<tr><td>" . $row['station_name'] . "</td><td>" . $row['station_location'] . 
             "</td><td>". $row['station_specs'] . "</td><td>". $row['station_state'] . 
             "</td><td>". $row['contact_num'] . "</td><td>";
	}
     
    echo "</tbody></table>";

?>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="ServiceStationList.js"></script>
</body>
</html>
