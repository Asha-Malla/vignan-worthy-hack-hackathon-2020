<?php
$usrid=$_POST['usrid'];
$pswrd=$_POST['pswrd'];

if($usrid=="admin"){
	if($pswrd=="ECE12345"){
    header("Location: ECEprob.php");
	}
}
else{
	echo "invalid username or password";
}

?>