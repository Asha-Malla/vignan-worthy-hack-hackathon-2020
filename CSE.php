<?php
$usrid=$_POST['usrid'];
$pswrd=$_POST['pswrd'];

if($usrid=="admin" && $pswrd=="CSE12345"){	
     header("Location: CSEprob.php");
}
else{
	echo "invalid username or password";
}

?>