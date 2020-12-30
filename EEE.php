<?php
$usrid=$_POST['usrid'];
$pswrd=$_POST['pswrd'];

if($usrid=="admin"){
	if($pswrd=="EEE12345"){
    header("Location: EEEprob.php");
	}
}
else{
	echo "invalid username or password";
}

?>