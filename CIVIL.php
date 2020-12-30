<?php
$usrid=$_POST['usrid'];
$pswrd=$_POST['pswrd'];

if($usrid=="admin"){
	if($pswrd=="CIVIL123"){
    header("Location: CIVILprob.php");
	}
}
else{
	echo "invalid username or password";
}

?>