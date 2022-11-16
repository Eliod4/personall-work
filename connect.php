<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['message'];
 //database connection
 $conn = new mysqli('localhost','root','','formvistors');
 if($conn ->connect_error){
    die('Connection Failed :' .$conn->connect_error);
 }else{
    $eliod=$conn->prepare("insert into comments(name,email,number,message) values(?,?,?,?)");
    {
        $eliod->bind_param("ssis",$name,$email,$number,$message);
        $eliod->execute();
        echo "message successfuly sent";
        $eliod->close();
        $conn->close();
    };
 }
 ?>