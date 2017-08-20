<html>
	<head>
		<title>Confirmation</title>
		<style type="text/css">
			td {line-height: 150%;}
			div{border:solid;}
			th {text-align: center;}
			td {text-align: center;}
		</style>
	</head>

	<body>
		<?php 

			$con = mysqli_connect('localhost','root',''); // making the connection

			if(!$con)
			{
				echo 'not connected to server';
			}

			if(!mysqli_select_db($con,'co226projecttest')) // selecting database co226projecttest
			{
				echo 'Database not connected';
			}

			$sql = "select * from person"; // this is the query.

			$records = mysqli_query($con,$sql);
		?>

		<table style="width:75%">
			
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>

			<tr>
				<?php

					while($person=mysqli_fetch_assoc($records)){
						echo"<tr>";
						echo"<td>".$person['First_Name']."</td>";
						echo"<td>".$person['Last_Name']."</td>";
						echo"</tr>";
					}
				?>
			</tr>

		</table>

	</body>

</html>