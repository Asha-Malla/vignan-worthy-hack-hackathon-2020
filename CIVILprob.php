<?php


$con=new mysqli('localhost','root','','issue_reporting');
if($con->connect_error){
	die('connection Failed:'.$con->connect_error);
}


$sql = "SELECT id,prblm FROM issue_tb where valid='YES' and solved='NO' and dprt='CIVIL'";

$result=mysqli_query($con,$sql);

mysqli_close($con);

?>


<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>User Issues</title> 
 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <a href="CIVILsolved.html" style="text-align: right;"><b>Solved?</b></a>
    <section> 
        <h1>Issues Of Students</h1> 
       
        <table> 
            <tr> 
                <th>Id</th> 
                <th>Issue</th> 
            </tr> 
           
            <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 

                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['prblm'];?></td> 

            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 