	<?php include('header.php'); ?>
	<?php include('dbcon.php'); ?>

		<div class="box1">
    	<h2>All Employees</h2>
    	<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Employee</button>
    	</div>
        <table class="table table-hover table-bordered table-striped">
    	<thead>
    		<tr>
    			<td class="td1">ID</td>
    			<td class="td2">First Name</td>
    			<td class="td3">Last Name</td>
    			<td class="td4">Mobile</td>
    			<td class="td5">Department</td>
    			<td class="td6">Update</td>
          <td class="td7">Delete</td>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    		$query = "select * from `students`";
    		$result = mysqli_query($connection, $query);

    		switch ($result) {
    			case (!$result):
    				die("Query failed");
    				break;
    			
    		    default:
    				while ($row = mysqli_fetch_assoc($result)) {
    					?>
    					<tr>
    						<td><?php echo $row['ID']; ?></td>
    						<td><?php echo $row['First_Name']; ?></td>
    						<td><?php echo $row['Last_Name']; ?></td>
    						<td><?php echo $row['Mobile']; ?></td>
    						<td><?php echo $row['Branch']; ?></td>
    						<td><a href="update_page.php? id=<?php echo $row['ID']; ?>" class="btn btn-success">Update</a></td>
    						<td><a href="delete_page.php? id= <?php echo $row['ID']; ?>" class="btn btn-danger">Delete</a></td>
    					</tr>

    					<?php
    				}
    				// print_r($result);
    				// break;
    		}
    		// (!$result){
    		// 	// die("connected");
    		// 	print_r($result);
    		// }
    		// esle{
    		// 	die("connected");
    		// 	// print_r($result);
    		// }
    		
    		?>
    
    	</tbody>
    </table>
<!-- this php block for form velidation message. -->
    <?php
    	if (isset($_GET['message'])) {
    		echo "<h5>".$_GET['message']."</h6>";
    	}

    ?>
<!-- this php block for insert operation message. -->
    <?php
    	if (isset($_GET['insert_msg'])) {
    		echo "<h6>".$_GET['insert_msg']."</h6>";
    	}


    ?>

    <!-- this php code for delete operations message -->
    <?php
    	if (isset($_GET['delete_msg'])) {
    		echo "<h6>".$_GET['delete_msg']."</h6>";
    	}


    ?>

    <!-- this php code for update operations message -->
    <?php
    	if (isset($_GET['update_msg'])) {
    		echo "<h6>".$_GET['update_msg']."</h6>";
    	}


    ?>






<!-- model -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        	<div class="form-group">
        		<label for="f_name">First Name</label>
        		<input type="text" name="f_name" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="l_name">Last Name</label>
        		<input type="text" name="l_name" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="mobile">Mobile</label>
        		<input type="text" name="mobile" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="branch">Department</label>
        		<input type="text" name="branch" class="form-control">
        	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_employee" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>

<?php include('footer.php'); ?>
