<?php

$id=$_POST['id'];
$valid=$_POST['valid'];



$con=new mysqli('localhost','root','','issue_reporting');

if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}

$sql="UPDATE issue_tb SET valid='$valid' where id=$id ;";

if(mysqli_query($con, $sql)){
    echo "Record updated successfully";
} else {

    echo "Error updating record: " ;
}

mysqli_close($con);

?>