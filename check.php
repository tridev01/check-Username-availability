<?php

$con=mysqli_connect("localhost","root","","check_user_name");
if (isset($_POST['user_name'])) {
	$username=mysqli_real_escape_string($con, $_POST['user_name']);
	$query="select * from users where username='".$username."'";
	$result=mysqli_query($con,$query);
	echo mysqli_num_rows($result);
}
?>
