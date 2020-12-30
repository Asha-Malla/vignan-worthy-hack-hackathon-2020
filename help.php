<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$subject=$_POST['subject'];



$con=new mysqli('localhost','root','','issue_reporting');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}else{
	$stmt=$con->prepare("insert into help_tb(fname,lname,subject) values(?,?,?)");
	$stmt->bind_param("sss",$fname,$lname,$subject);
	$stmt->execute();
	$stmt->close();
	$con->close();
	echo "SUCCESSFULLY SUBMITTED";
}

?>