<?php
$usrid=$_POST['usrid'];
$pswrd=$_POST['pswrd'];

if($usrid=="admin"){
	if($pswrd=="ECM12345"){
    header("Location: ECMprob.php");
	}
}
else{
	echo "invalid username or password";
}

?>