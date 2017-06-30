<?php  
$server="localhost";
$user="root";
$password="";
$db_name="";

$conn= mysqli_connect($server,$user,$password,$db_name);
/*if($conn){
  echo "connected to database successfully<br>";
}
else {
  echo "could not connect".mysqli_error($conn)."<br>";
}*/

$dbname="chatbox";
$sql="CREATE DATABASE ".$dbname.";";
mysqli_query($conn,$sql);
/*if(mysqli_query($conn,$sql)){
  echo "database created successfully<br>";
}
else {
  echo "database not created".mysqli_error($conn)."<br>";
}*/

mysqli_select_db($conn,$dbname);
   
$sql="CREATE TABLE Chat (".
    "id INT(20) AUTO_INCREMENT PRIMARY KEY,".
    "username varchar(20),".
    "messege varchar(255))";
mysqli_query($conn,$sql);
/*if(mysqli_query($conn,$sql)){
  echo "table created successfully<br>";
}
else {
  echo "table not created".mysqli_error($conn)."<br>";
}*/


//mysqli_close($conn);

?>