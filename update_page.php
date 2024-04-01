<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


		<?php

			if(isset($_GET['id'])){
				$id=$_GET['id'];
			
    			$query = "select * from `students` where `id` = '$id'";
    			$result = mysqli_query($connection, $query);

    			if(!$result){
    				die("Query Failed");
    			}
    			else{
    				$row = mysqli_fetch_assoc($result);

    			}
    		}
		?>


			<?php

				if(isset($_POST['update_employee'])){

					if(isset($_GET['id_new'])){
						$idnew = $_GET['id_new'];
					}

					$fname=$_POST['f_name'];
					$lname=$_POST['l_name'];
					$mobile=$_POST['mobile'];
					$branch=$_POST['branch'];

					$query= "update `students` set `First_Name` ='$fname', `Last_Name`='$lname', `Mobile`='$mobile', `Branch`='$branch' where `id`='$idnew'";

					$result = mysqli_query($connection, $query);

    				if(!$result){
    					die("Query Failed");
    				}
    				else{
    					header('location:index.php?update_msg=You have successfully update the date.');
    				}
				}
			?>

			<form action="update_page.php? id_new=<?php echo $id; ?>" method="post">
			<div class="form-group">
        		<label for="f_name">First Name</label>
        		<input type="text" name="f_name" class="form-control" value="<?php  echo $row['First_Name'] ?>">
        	</div>
        	<div class="form-group">
        		<label for="l_name">Last Name</label>
        		<input type="text" name="l_name" class="form-control" value="<?php  echo $row['Last_Name'] ?>">
        	</div>
        	<div class="form-group">
        		<label for="mobile">Mobile</label>
        		<input type="text" name="mobile" class="form-control" value="<?php  echo $row['Mobile'] ?>">
        	</div>
        	<div class="form-group">
        		<label for="branch">Department</label>
        		<input type="text" name="branch" class="form-control" value="<?php  echo $row['Branch'] ?>">
        	</div>
        	<div>
        		<input type="button" class="btn btn-danger"  value="close"  data-bs-dismiss="modal" formaction="index.php">
        	    <input type="submit" id="update_b" class="btn btn-success" name="update_employee" value="UPDATE">
        	</div>
        	</form>



