<?php
$name=$_POST['name'];
$usrnm=$_POST['usrnm'];
$pswrd=$_POST['pswrd'];


$con=new mysqli('localhost','root','','issue_reporting');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}


$sql = "SELECT * FROM committee_tb where usrnm='".$usrnm."'";

$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0) {
    while ($row=mysqli_fetch_assoc($res)) {
    	if($row["pswrd"]==$pswrd){
             header("Location: commi.php");
    	}
    	else{
    		echo "invalid username or password";
    	}
    }
} else {
    echo "invalid";
}
mysqli_close($con);

?>