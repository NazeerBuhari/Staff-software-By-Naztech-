<?php

require_once ('dbh.php');

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

$sql = "SELECT * from `alogin` WHERE password = '$old_password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==1){

   $qry = "UPDATE `alogin` SET password = '$new_password' ";
   $rslt = mysqli_query($conn, $qry);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert(' Password Changed successfully')
    window.location.href='..//aloginwel.php';
    </SCRIPT>");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to change Password pls try again');
    window.location.href='..//change_password.php';
    </SCRIPT>");
}
?>