<?php 

require_once 'db_connect.php';

if($_GET['User_ID']) {
	$userid = $_GET['User_ID'];

	$sql = "SELECT * FROM userdata WHERE User_ID = {$userid}";
        $result = $connect->query($sql); // mysqli_query($mysqli, $sql)

        $userupdate = $result->fetch_assoc(); // mzsqli_fetch_assoc($result)

    }
    ?>
    <div class="userupdatesection">
    	<div >
    		<h3>UPDATE USER DATA</h3>
    	</div>
    	<hr>	

    	<form class="" id="updateuserinfo" action="./actions/edituser.php" method="POST">
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">First Name: </label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Firstname" value="<?php echo $userupdate['Firstname'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">Surname: </label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Surname" value="<?php echo $userupdate['surname'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">Email: </label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Email" value="<?php echo $userupdate['Email'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">Password: </label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Password" value="<?php echo $userupdate['Password'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">Status</label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Status" value="<?php echo $userupdate['Status'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<label id="labellettering">Employee ID</label>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="Empl_ID" value="<?php echo $userupdate['Empl_ID'] ?>">
    			</div>
    		</div>
    		<div class="row">
    			<div  id="labellettering" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<button  class="btn btn-default" type="submit">Update User</button>
    			</div>
    		</div>
    	</form>
    </div>
<?php

            require_once 'db_connect.php';

            if($_POST) {
            	$firstname = $_POST['Firstname'];
            	$surname = $_POST['Surname'];
            	$email = $_POST['Email'];
            	$password = $_POST['Password'];
            	$status = $_POST['Status'];
            	$employid = $_POST['Empl_ID'];

            	$userid = $_GET['User_ID'];

            	$sql = "UPDATE userdata SET Firstname = '$firstname', Surname = '$surname', Email = '$email', Password = '$password', Status = '$status', Empl_ID = '$employid' WHERE User_ID = {$userid}";
            	if($connect->query($sql) === TRUE) {
            		echo "<p>Successfully Updated</p>";
            		echo "<a href='./adminpanel.php'><button  class='btn btn-default' type='button'>Back to Admin Panel</button></a>";

            	} else {
            		echo "Error while updating record : ". $connect->error;
            	}

            	$connect->close();

            }

            ?>
