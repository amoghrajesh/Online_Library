<?php
	
	extract($_POST);
	print_r($_POST);
	$conn=mysqli_connect("localhost","root","") or die(mysqli_error);
	mysqli_select_db($conn,"assgn1");
	$query="insert into users(uname,pswd,forgot) values('$uname','$pswd','$forgot');";
	if(mysqli_query($conn,$query)){
		echo "Successful Registration";
	}
	
	
	
	
?>



