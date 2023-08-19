<?php

require_once ('process/dbh.php');

$sql = "SELECT * from `employee` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$sql1 = "SELECT * from `employee`  WHERE employmentStatus = 'Active'";
$sql2 = "SELECT * from `employee`  WHERE employmentStatus = 'Not_active'";

$result1 = mysqli_num_rows(mysqli_query($conn, $sql1));
$result2 = mysqli_num_rows(mysqli_query($conn, $sql2));
?>
<html>
<head>

	<title>View Staff</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>

	<style>
	body{
		background-color:;
	}
	a{
		text-decoration:none;
		color:blue ;
		
	}
	.table_head{
		background-color:red;
	}
	</style>
</head>
<body>
	<header>
	

		<nav>
		<img src="mudatexlog.png" class="avatar">
			<ul id="navli">
			<li><a class="homeblack" href="aloginwel.php"><b><I>DASHBOARD</I></b></a></li>
				<li><a class="homeblack" href="addemp.php"><b>ADD STAFF</b></a></li>
				<li><a class="homered" href="viewemp.php"><b><i>VIEW STAFF</i></b></a></li>
			
			
				<li><a class="homeblack" href="change_password.php"><b>CHANGE PASSWORD</b></a></li>
				
				<li><a class="homeblack" href="alogin.html"><b>LOG OUT</b></a></li>
				
			
			</ul>
		</nav>
	</header>
	<div class="divider"></div><br>
	<span style="font-size:50px; color:green; float:left"><?php echo $result1 ?> Active</span>
	<span style="font-size:50px; color:red; float:right"><?php echo $result2 ?> Not-Active</span>
	<center>
		<input type="text" style="padding:15px; margin:15px; width:800px; height:0px; border: 1px solid black; border-radius:40px" name="filter" value="" id="filter" placeholder="Search ..." autocomplete="off" />
	</center>
		<br>
		<table class="table table-reponsive" style="border: 1px solid gray">
			<thead style='background-color:red;'>
			<tr class="table_head">
			<th align = "center"style='color:brown'>S/N</th>
							<th align = "center" style='color:wheat;'>ID</th>
				<th align = "center" style='color:white;' >PICTURE</th>
				<th align = "center" style='color:#fff39a'>NAME</th>
				<th align = "center"style='color:silver;'> STATUS</th>
				<th align = "center"style='color:white;'>D.O.B</th>
				<th align = "center"style='color:MAROON'>SEX</th>
				<th align = "center"style='color:silver;'>PHONE</th>
				<th align = "center">ADD.</th>
				<th align = "center"style='color:#fff39a'>GUARANTOR</th>
				<th align = "center"style='color:wheat;'>BRANCH</th>
				<th align = "center"style='color:White;'>DEPT.</th>
				
				<th align = "center"style='color:#fff39a'>POSITION</th>
				<th align = "center"style='color:golden'>SALARY</th>
				<th align = "center"style='color:green;'>REMARK</th>
					
				<th align = "center"style='color:silver;'>OPT</th>
			</tr>
			</thead>

			<?php
			$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					if($employee['employmentStatus']=="Active"){
						$status = "<td style='color:green;'>".$employee['employmentStatus']."</td>";
					}else $status = "<td style='color:red;'>".$employee['employmentStatus']."</td>";
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['staff_id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstname']." ".$employee['lastname']."</td>";
					echo $status;
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['guarantor']."</td>";
					echo "<td>".$employee['branch']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['position']."</td>";
					echo "<td>".$employee['salary']."</td>";
					
					
					echo "<td>".$employee['remark']."</td>";
					
					echo "<td><a href=\"edit.php?id=$employee[id]\" ><b>|Edit|</b></a> 
					 <a href=\"amyprofile.php?id=$employee[id]\"><b>|View|</b></a>
					 <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">d</a></td>";
					 $seq+=1;
				}


			?>

		</table>
		
		<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>