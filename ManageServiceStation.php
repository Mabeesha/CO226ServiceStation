<!DOCTYPE html>
<?php
// ================ change the db =============================
 $db = mysqli_connect('localhost','root','','ServiceStations')
 or die('Error connecting to MySQL server.');
 $user_name = $_GET['varname'];
?>

<html>
<head>
	<title>Service Station</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="style_manageService.css">
    
</head>
<body>        
    
    <?php
    
       $query = "SELECT * FROM stationInfo WHERE user_name='".$user_name."'";
	   mysqli_query($db, $query) or die ('Error querying the DB.');
	   $result = mysqli_query($db, $query);
       $row = mysqli_fetch_array($result);

    ?>
    

   
    <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header">
            <div class="mdl-layout-icon"></div>
            <div class="mdl-layout__header-row">
                <span id="title-service-station" class="mdl-layout__title" name="userName">
                    <?php
                            echo $user_name;
                            echo "<input type='hidden' name='user_name' value=$user_name>";
                    ?>
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                   <button id="signOutBtn" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                        Sign Out <i class="material-icons">account_box</i>
                   </button>
                </nav>
                </div>
        </header>
        
     <form action="update.php">   
         
         <?php
             echo "<input type='hidden' name='user_name' value=$user_name>";
         ?>
        
     <table align="center">
            <tr>
                <td>
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Previous State</h2>
                        </div>
                        <div id="text_last_free" class="mdl-card__supporting-text">
                            <?php
                                echo $row['station_state'];
                            ?>
                        </div>  
                    </div>
                </td>
                <td>
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Current State</h2>                           
                        </div>   
                        
                        <div id='text_last_free' class='mdl-card__supporting-text'>
                            <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-1'>
                            <input type='radio' id='option-1' class='mdl-radio__button' name='state' value='Free'>
                            <span class='mdl-radio__label'>Free</span>
                            </label>
        
                            <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-2'>
                            <input type='radio' id='option-2' class='mdl-radio__button' name='state' value='Busy'>
                            <span class='mdl-radio__label'>Busy</span>
                            </label>
                            </div>
            
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                        
                    <button id="btnUpdate" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Update
                    </button>
                     
                </td>
            </tr>
        </table>
            
        
    </div>
        
    </form>   
            
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="ManageServiceStation.js"></script>

</body>
</html>