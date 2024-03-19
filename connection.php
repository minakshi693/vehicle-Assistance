<?php
$servername="localhost";
$username="root";
$password= "";
$db="car";
$conn= mysqli_connect($servername,$username,$password,$db);
if($conn){
    // echo"Connection successful";
}
else{
    echo "connecttion failed";
}
?>