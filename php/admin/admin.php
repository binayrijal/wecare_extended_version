<?php
$server="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("<script>alert('connection failed');</script>".mysqli_connect_error());
}
else{
    echo "connection successfully";
    

}
?>