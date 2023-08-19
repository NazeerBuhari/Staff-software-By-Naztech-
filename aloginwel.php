<?php 
require_once ('process/dbh.php');

$sql = "SELECT * FROM employee order by id desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>

</head>
<body>
	
	<header>
	
		<nav>
		<img src="mudatexlog.png" class="avatar">
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php"><b><I>ADMIN DASHBOARD</I></b></a></li>
				<li><a class="homeblack" href="addemp.php"><b>ADD STAFF</b></a></li>
				<li><a class="homeblack" href="viewemp.php"><b>VIEW STAFF</b></a></li>
			
			
				<li><a class="homeblack" href="change_password.php"><b>CHANGE PASSWORD</b></a></li>
				
				<li><a class="homeblack" href="alogin.html"><b>LOG OUT</b></a></li>
				
			</ul>

		</nav>
	
	</header>
	
	<div class="divider">
</div>
	<center>
	
		<input type="text" style="padding:15px; margin:15px; width:800px; height:0px; border: 1px solid black; border-radius:40px" name="filter" value="" id="filter" placeholder="Search ..." autocomplete="off" />
	</center>
	
    	<table class="table table-reponsive" style="border: 1px  solid black">
			
			<tr>
			<th align = "center"style='color:brown'>S/N</th>
							<th align = "center" style='color:wheat;'>ID</th>
				<th align = "center" style='color:white;' >PICTURE</th>
				<th align = "center" style='color:#fff39a'>NAME</th>
				<th align = "center"style='color:wheat;'> STATUS</th>
				
				<th align = "center"style='color:white;'>BRANCH</th>
				<th align = "center"style='color:wheat'>DEPT.</th>
				
				<th align = "center"style='color:#fff39a'>POSITION</th>
				<th align = "center"style='color:Whitesmoke;'>CONTACT</th>
				

			</tr>
			
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
					echo "<td>".$employee['branch']."</td>";
					echo "<td>".$employee['dept']."</td>";
										echo "<td>".$employee['position']."</td>";
					echo "<td>".$employee['contact']."</td>";
					
					
					
					$seq+=1;
				}


			?>
			
		</table>
	</div>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>