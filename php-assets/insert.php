<?php 
	include "connect.php";

$username= $_REQUEST['user'];
$messege= $_REQUEST['messege'];


$insert="INSERT INTO chat(username,messege) VALUES('$username','$messege')";
mysqli_query($conn,$insert);

$select="SELECT * FROM chat ORDER by id DESC";
$result=mysqli_query($conn,$select);

while($extract= mysqli_fetch_array($result,MYSQLI_BOTH)){
	echo "<span class='animated fadeIn'><b>".$extract["username"]."</b>: &nbsp;".$extract["messege"]."</span><br>"; 
}
	

mysqli_close($conn);
?>