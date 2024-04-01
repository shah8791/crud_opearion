<?php
include 'dbcon.php';
	if (isset($_POST['add_employee'])) {
		
		$fname = $_POST['f_name'];
		$lname = $_POST['l_name'];
		$mobile = $_POST['mobile'];
		$branch = $_POST['branch'];

		if(empty($fname)){
			header('location:index.php? message= You need to fill in the first name!');
		}
		else{
			$query = "insert into `students` (`First_Name`,`Last_Name`,`Mobile`,`Branch`) values ('$fname','$lname','$mobile','$branch')";

			$result = mysqli_query($connection,$query);

			if (!$result) {
				die("Query Failed");
			}
			else{
				header('location:index.php? insert_msg= Your data has been added successfully');
			}
		}
	}
?>