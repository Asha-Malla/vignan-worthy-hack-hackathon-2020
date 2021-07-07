<?php


$email=$_POST['email'];
$dprt=$_POST['dprt'];
$prblm=$_POST['prblm'];



$con=new mysqli('localhost','root','','issue_reporting');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}else{
	$stmt=$con->prepare("insert into issue_tb(email,dprt,prblm) values(?,?,?)");
	$stmt->bind_param("sss",$email,$dprt,$prblm);
	$stmt->execute();
	$stmt->close();
	$con->close();
	header("Location: home.html");
}

?>