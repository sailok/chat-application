<?php 
	include "connect.php";


$select="SELECT * FROM chat ORDER by id DESC";
$result=mysqli_query($conn,$select);

while($extract= mysqli_fetch_array($result,MYSQLI_BOTH)){
	echo "<b>".$extract["username"]."</b>: &nbsp;".$extract["messege"]."<br>"; 
}
	

mysqli_close($conn);
?>