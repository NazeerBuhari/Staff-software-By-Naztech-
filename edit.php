<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
	
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$position = mysqli_real_escape_string($conn, $_POST['position']);
	$employmentStatus = mysqli_real_escape_string($conn, $_POST['employmentStatus']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);




	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstname`='$firstname',
`lastname`='$lastname',`branch`='$branch',`birthday`='$birthday',`gender`='$gender',`salary`='$salary',`employmentStatus`='$employmentStatus',`contact`='$contact',
`address`='$address',`dept`='$dept',`position`='$position',`remark`='$remark' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$branch = $res['branch'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
    $remark = $res['remark'];
    $salary = $res['salary'];
	$dept = $res['dept'];
    $position = $res['position'];
    $employmentStatus = $res['employmentStatus'];
	
}
}

?>

<html>
<head>
	<title>View Employee</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
        <img src="mudatexlog.png" class="avatar">
			<ul id="navli">
            <li><a class="homeblack" href="aloginwel.php"><b>HOME</b></a></li>
				<li><a class="homeblack" href="addemp.php"><b>ADD STAFF</b></a></li>
				<li><a class="homered" href="viewemp.php"><i><b>VIEW STAFF</b></i></a></li>
				
				
			
				
        <li><a class="homeblack" href="alogin.html"><b>LOG OUT</b></a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Staff Info</h2>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                <p style="color:#a88646"><b>First Name</p>
                                     <input class="input--style-1" type="text" name="firstname" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
                            <div class="col-1">
                            <p style="color:#a88646">last Name</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastname" value="<?php echo $lastname;?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <p style="color:#a88646">Salary</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="number" name="salary" value="<?php echo $salary;?>">
                                   
                                </div>
                                <div class="rs-select2 js-select-simple select--no-search" style="padding:1px">
                                    <p style="color:#a88646">Employment Status</p>
                                    <br><?php 
                                    $active= "<option value='Active' style='color:white; background-color:green'>Active</option>";
                                    $not_active= "<option value='Not_active' style='color:white; background-color:red'>Not Active</option>";
                                    ?>
                                        <select name="employmentStatus">
                                            <option value="<?php echo $employmentStatus;?>"><?php echo $employmentStatus;?></option>
                                            <?php echo $active ?>
                                            <?php echo $not_active ?>
                                            <!--<option value="active" ><?php echo $active ?></option>
                                            <option value="Not_active"><?php echo $not_active ?></option>-->
                                            <br>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div><br>                                        
                                                                                                                                                          
                                    <div class="rs-select2 js-select-simple select--no-search" style="padding:1px">
                                    <p style="color:#a88646">Branch</p>
                                    <br>
                                        <select name="branch">
                                    
                                            <option value="<?php echo $branch;?>"><?php echo $branch;?></option>
                                            <option value="Abuja Branch">Abuja Branch</option>
                                            <option value="Adamawa Branch">Adamawa Branch</option>
                                            <option value="Kaduna Branch">Kaduna Branch </option>
                                            <option value="Katsina Branch">Katsina Branch </option>
                                            <option value="Ibrahim Taiwo Rd.(Head Office)">Ibrahim Taiwo Rd.(Head Office)</option>
                                            <option value="SabonGari Branch kano">SabonGari Branch kano</option>
                                            <option value="Ibrahim Taiwo Rd.(Head Office)">Ibrahim Taiwo Rd.(Head Office)</option>
                                            <option value="Hamdala House">Hamdala House</option>
                                            <option value="Sabonruwa Branch">Sabon Ruwa Branch</option>
                                            <option value="Sokoto Branch">Sokoto Branch</option>
                                            <option value="Rufaida House,Gwarzo Rd, kano">Rufaida House,Gwarzo Rd, kano</option>
                                            
</br>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
</div>
<br></br>
<div class="col-1">
                            <p style="color:#a88646">Date Of Birth</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>">
                                   
                                </div>
                            </div>       
                                
                        
                        <div class="col 4" padding:"1px">
                            <p style="color:#a88646">Contact</p>
                                <div class="input-group">
                        
                        
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        
                        <p style="color:#a88646">Address</p>
                        
                         <div class="input-group">
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>
                        
                        <p style="color:#a88646">Department</p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>
                        <p style="color:#a88646">Position</p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="position" value="<?php echo $position;?>">
                        </div>
                        <p style="color:#a88646">remark</p>
                        
                        <div class="input-group">
                           <input class="input--style-1" type="text"  name="remark" value="<?php echo $remark;?>">
                       </div>
                        <input class="input--style-1" type="hidden" name="gender" value="<?php echo $gender;?>">
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
