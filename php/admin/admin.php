<?php
$server="localhost";
$username="root";
$password="";
$database="WeCare";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("<script>alert('connection failed');</script>".mysqli_connect_error());
}
else{
    echo "connection successfully";
    if (isset($_POST['submit'])) { //check it is click from button submit or not
        $uname=$_POST['username'];
        $uname=$_POST['password']
       // $pasword=$_POST['pasword'];
        if($uname='binay' && $pasword='12345') //give static value to admin
        {
            $que="SELECT * FROM patient";
            $result=mysqli_query($conn,$que); //run sql query
            if($result){
                while($row=mysqli_fetch_assoc($result)){ //fetch result from table patient
                    $first=$row['first_name'];
                    $last=$row['last_name'];
                    $address=$row['address'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $gender=$row['gender'];
                    echo "<ul>";
                    echo "<li>$first</li>";
                    echo "<li>$last</li>";
                    echo "<li>$address</li>";
                    echo "<li>$email</li>";
                    echo "<li>$phone</li>";
                    echo "<li>$gender</li>";
                    echo "</ul>"
                    
                }

               
            }
            else{
              echo "error show";
            }
            

        }
        else{
            echo "what to do in else";
        }
    }
    else{
        
        header("Location:first.html");
    }
    

}
?>
 
 