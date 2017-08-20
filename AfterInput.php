<html>
	<head>
		<title>Confirmation</title>
	</head>

	<body>
		<?php 

			$con = mysqli_connect('localhost','root','');

			if(!$con)
			{
				echo 'not connected to server';
			}

			if(!mysqli_select_db($con,'co226projecttest'))
			{
				echo 'Database not connected';
			}

			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];

			$sql = "insert into person values('$fname','$lname')";

			if(!mysqli_query($con,$sql))
			{
				echo 'not inserted';
			}
			else
			{
				echo 'inserted';
			}


		?>
	</body>

</html>